<?php

namespace App\Http\Controllers\traits\user\features;

use App\Http\Requests\CreateCommentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

/**
 * Trait Comment
 * @package App\Http\Controllers\traits\user\features
 */
trait Comment
{
    /**
     * @param CreateCommentRequest $request
     * @return RedirectResponse
     */
    public function comment(CreateCommentRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        \App\Models\Comment::query()->create([
            'user_id' => Auth::id(),
            'post_id' => $validated['post_id'],
            'content' => $validated['comment'],
        ]);

        return redirect()->back();
    }
}
