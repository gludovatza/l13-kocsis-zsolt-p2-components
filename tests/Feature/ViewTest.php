<?php

test('az assert demo oldal nézete tesztelhető', function () {
    $response = $this->get('/assert-demo');

    $response->assertStatus(200);

    $response->assertViewIs('assert-demo');

    $response->assertViewHas('title');
    $response->assertViewHas('users');

    $response->assertViewHasAll([
        'title',
        'users',
        'message',
        'emptyList',
    ]);

    $response->assertViewMissing('admin');

    $response->assertSee('Assert teszt oldal');

    $response->assertSeeHtml('<strong>Siker!</strong>');

    $response->assertSeeInOrder([
        'Anna',
        'Béla',
        'Cecil',
    ]);

    $response->assertSeeHtmlInOrder([
        '<p>Első elem</p>',
        '<p>Második elem</p>',
        '<p>Harmadik elem</p>',
    ]);

    $response->assertSeeText('Fontos szöveg');

    $response->assertSeeTextInOrder([
        'Első elem',
        'Második elem',
        'Harmadik elem',
    ]);

    $response->assertDontSee('Hiba történt');
    $response->assertDontSeeHtml('<script>alert("hiba")</script>');
    $response->assertDontSeeText('Tiltott szöveg');
});
