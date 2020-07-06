<?php

namespace Tests\Feature\Http\Controllers;

use App\Comment;
use App\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\PostController
 */
class PostControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $posts = factory(Post::class, 3)->create();

        $response = $this->get(route('post.index'));

        $response->assertOk();
        $response->assertViewIs('post.index');
        $response->assertViewHas('posts');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('post.create'));

        $response->assertOk();
        $response->assertViewIs('post.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'store',
            \App\Http\Requests\PostStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $can = $this->faker->word;
        $need = $this->faker->word;

        $response = $this->post(route('post.store'), [
            'can' => $can,
            'need' => $need,
        ]);

        $posts = Post::query()
            ->where('can', $can)
            ->where('need', $need)
            ->get();
        $this->assertCount(1, $posts);
        $post = $posts->first();

        $response->assertRedirect(route('post.index'));
        $response->assertSessionHas('post.id', $post->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $post = factory(Post::class)->create();
        $posts = factory(Post::class, 3)->create();

        $response = $this->get(route('post.show', $post));

        $response->assertOk();
        $response->assertViewIs('post.show');
        $response->assertViewHas('post');
        $response->assertViewHas('comments');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $post = factory(Post::class)->create();

        $response = $this->get(route('post.edit', $post));

        $response->assertOk();
        $response->assertViewIs('post.edit');
        $response->assertViewHas('post');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\PostController::class,
            'update',
            \App\Http\Requests\PostUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $post = factory(Post::class)->create();
        $post = $this->faker->word;

        $response = $this->put(route('post.update', $post), [
            'post' => $post,
        ]);

        $response->assertRedirect(route('post.index'));
        $response->assertSessionHas('post.id', $post->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $post = factory(Post::class)->create();

        $response = $this->delete(route('post.destroy', $post));

        $response->assertRedirect(route('post.index'));

        $this->assertDeleted($post);
    }


    /**
     * @test
     */
    public function chooseBestComment_displays_view()
    {
        $post = factory(Comment::class)->create();

        $response = $this->get(route('post.chooseBestComment'));

        $response->assertOk();
        $response->assertViewIs('post.show');
        $response->assertViewHas('post');
        $response->assertViewHas('comments');
    }
}
