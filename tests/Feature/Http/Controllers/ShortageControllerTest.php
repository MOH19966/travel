<?php

namespace Tests\Feature\Http\Controllers;

use App\Shortage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ShortageController
 */
class ShortageControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $shortages = factory(Shortage::class, 3)->create();

        $response = $this->get(route('shortage.index'));

        $response->assertOk();
        $response->assertViewIs('shortage.index');
        $response->assertViewHas('shortages');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('shortage.create'));

        $response->assertOk();
        $response->assertViewIs('shortage.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ShortageController::class,
            'store',
            \App\Http\Requests\ShortageStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $shortage = $this->faker->word;

        $response = $this->post(route('shortage.store'), [
            'shortage' => $shortage,
        ]);

        $shortages = Shortage::query()
            ->where('shortage', $shortage)
            ->get();
        $this->assertCount(1, $shortages);
        $shortage = $shortages->first();

        $response->assertRedirect(route('shortage.index'));
        $response->assertSessionHas('shortage.id', $shortage->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $shortage = factory(Shortage::class)->create();

        $response = $this->get(route('shortage.show', $shortage));

        $response->assertOk();
        $response->assertViewIs('shortage.show');
        $response->assertViewHas('shortage');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $shortage = factory(Shortage::class)->create();

        $response = $this->get(route('shortage.edit', $shortage));

        $response->assertOk();
        $response->assertViewIs('shortage.edit');
        $response->assertViewHas('shortage');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ShortageController::class,
            'update',
            \App\Http\Requests\ShortageUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $shortage = factory(Shortage::class)->create();
        $shortage = $this->faker->word;

        $response = $this->put(route('shortage.update', $shortage), [
            'shortage' => $shortage,
        ]);

        $response->assertRedirect(route('shortage.index'));
        $response->assertSessionHas('shortage.id', $shortage->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $shortage = factory(Shortage::class)->create();

        $response = $this->delete(route('shortage.destroy', $shortage));

        $response->assertRedirect(route('shortage.index'));

        $this->assertDeleted($shortage);
    }
}
