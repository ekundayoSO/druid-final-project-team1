<?php

declare(strict_types=1);

namespace Drupal\contact_form\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\contact_form\Form\ContactUsForm;

/**
 * Provides a block with the ContactUsForm form.
 *
 * @Block(
 *   id = "contact_form_block",
 *   admin_label = @Translation("Contact Us Form Block")
 * )
 */
final class ContactFormBlock extends BlockBase
{

    /**
     * {@inheritdoc}
     */
    public function build(): array
    {
        // Embed the ContactUsForm form into the block.
        return \Drupal::formBuilder()->getForm(ContactUsForm::class);
    }
}
