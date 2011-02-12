<?php



/**
 * page form.
 *
 * @package    crud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageForm extends BasepageForm
{
  public function configure()
  {
    unset($this['created_at'],$this['updated_at']);
    $this->widgetSchema['published'] = new sfWidgetFormChoice(array('choices'=>array('0'=>'Not Published','1'=>'published')));  
    $this->widgetSchema['image'] =new sfWidgetFormInputFile(array()) ;
    
    $this->setValidator('image', new sfValidatorFile(array(
      'mime_types' => 'web_images',
      'path' => sfConfig::get('sf_upload_dir').'/products',
      'required' => false,
      'validated_file_class' => 'pageFile'
    )));
    
    $this->validatorSchema['name'] =new sfValidatorString(array('min_length'=>'4'),array('min_length'=>'minimum 4 character required')) ; 
    $this->validatorSchema['title'] =new sfValidatorString(array('min_length'=>'5'),array('min_length'=>'minimum 5 character required')) ;
    $this->validatorSchema['body'] =new sfValidatorString(array('min_length'=>'15'),array('min_length'=>'minimum 15 character required')) ; 
  }
}
