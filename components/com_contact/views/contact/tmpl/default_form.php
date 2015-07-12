<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');

if (isset($this->error)) : ?>
	<div class="contact-error">
		<?php echo $this->error; ?>
	</div>
<?php endif; ?>
<div class="row">
    <div class="col-md-6">
        <div class="contact-form">
            <form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate">
                <fieldset>
                    <!--                <legend>--><?php //echo JText::_('COM_CONTACT_FORM_LABEL'); ?><!--</legend>-->
                    <div class="form-group">
                        <div class="control-label"><?php echo $this->form->getLabel('contact_name'); ?></div>
                        <div class="controls"><?php echo $this->form->getInput('contact_name'); ?></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><?php echo $this->form->getLabel('contact_email'); ?></div>
                        <div class="controls"><?php echo $this->form->getInput('contact_email'); ?></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><?php echo $this->form->getLabel('contact_subject'); ?></div>
                        <div class="controls"><?php echo $this->form->getInput('contact_subject'); ?></div>
                    </div>
                    <div class="control-group">
                        <div class="control-label"><?php echo $this->form->getLabel('contact_message'); ?></div>
                        <div class="controls"><?php echo $this->form->getInput('contact_message'); ?></div>
                    </div>
                    <?php if ($this->params->get('show_email_copy')) : ?>
                        <div class="control-group">
                            <div class="checkbox">
                                <label class="control-label">
                                    <?php echo $this->form->getInput('contact_email_copy'); ?> <?php echo $this->form->getLabel('contact_email_copy'); ?>
                                </label>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php //Dynamically load any additional fields from plugins. ?>
                    <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
                        <?php if ($fieldset->name != 'contact') : ?>
                            <?php $fields = $this->form->getFieldset($fieldset->name); ?>
                            <?php foreach ($fields as $field) : ?>
                                <div class="control-group">
                                    <?php if ($field->hidden) : ?>
                                        <div class="controls">
                                            <?php echo $field->input; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="control-label">
                                            <?php echo $field->label; ?>
                                            <?php if (!$field->required && $field->type != "Spacer") : ?>
                                                <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL'); ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="controls"><?php echo $field->input; ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <div class="form-actions">
                        <button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
                        <input type="hidden" name="option" value="com_contact" />
                        <input type="hidden" name="task" value="contact.submit" />
                        <input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
                        <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                        <?php echo JHtml::_('form.token'); ?>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <div class="col-md-offset-1 col-md-5">
        <div class="contact-address">
            <h3>Asestech Engineering</h3>
            <span class="street">Tongeresestraat 29-81</span>
            <br>
            <span class="postcode">5613DA</span>
            <span class="city">Eindhoven</span>
            <br>
            <span class="country">Netherlands</span>
            <br><br>
            <span class="telephone">+31(0) 646237135</span>
            <br>
            <a class="mail" href="mailto:info@asestech.com">info@asestech.com</a>
        </div>
    </div>
</div>

<div class="row row-bordered" style="padding-top: 40px; padding-bottom: 20px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.1052990433263!2d5.4925834!3d51.43786005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8fb25f78017%3A0x1300de5a6fc4dab3!2s5613+DA+Eindhoven!5e0!3m2!1sen!2snl!4v1426526879985" width="1140" height="350" frameborder="0" style="border:1px solid #000000"></iframe>
</div>
