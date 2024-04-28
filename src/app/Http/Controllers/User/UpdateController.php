<?php

namespace App\Http\Controllers\User;

use App\Actions\User\LoadUserAvatarIfExistsAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user, LoadUserAvatarIfExistsAction $loadUserAvatarIfExists): RedirectResponse
    {
        $userData = $request->validated();

        $userData['city_id'] = isset($userData['city_id']) ? $userData['city_id'] : null;

        $loadUserAvatarIfExists($user, $userData['avatar'] ?? null);

        $user->employments()->sync($userData['employments'] ?? []);
        $user->charts()->sync($userData['charts'] ?? []);
        $user->universities()->sync($userData['universities'] ?? []);
        $user->collages()->sync($userData['collages'] ?? []);

        if ($user->update($userData))
            toastr()->success('Данные успешно обновлены!', 'Отчет');

        return redirect()->route('user.profile', $user);
    }
}
