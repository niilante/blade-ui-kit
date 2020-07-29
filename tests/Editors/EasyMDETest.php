<?php

declare(strict_types=1);

namespace Tests\Editors;

use Tests\ComponentTestCase;

class EasyMDETest extends ComponentTestCase
{
    /** @test */
    public function the_component_can_be_rendered()
    {
        $expected = <<<HTML
<textarea name="about" id="about" rows="3" x-data="" x-init="new EasyMDE({ element: \$el })"></textarea>
HTML;

        $this->assertComponentRenders($expected, '<x-easy-mde name="about"/>');
    }

    /** @test */
    public function editor_can_have_old_values()
    {
        $this->flashOld(['about' => 'About me text']);

        $expected = <<<HTML
<textarea name="about" id="about" rows="3" x-data="" x-init="new EasyMDE({ element: \$el })">About me text</textarea>
HTML;

        $this->assertComponentRenders($expected, '<x-easy-mde name="about"/>');
    }
}
