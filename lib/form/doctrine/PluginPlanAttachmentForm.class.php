<?php

/**
 * PluginPlanAttachment form.
 *
 * @package    form
 * @subpackage ImageAttachment
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
abstract class PluginPlanAttachmentForm extends AttachmentForm
{
  public function setUp() {
    $this->getObject()->setType('plan');
    $this->prepare(array('mimetypes' => array(
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/x-png',
        'image/gif',
    )));
    parent::setUp();
  }
}
