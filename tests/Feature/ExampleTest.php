<?php

it('returns a redirect from homepage', function () {
    $response = $this->get('/');

    $response->assertRedirect();
});
