<?php

class Loader
{
        
    /**
     * Controller Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $controllerDirectoryPath = array();
    
    /**
     * View Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $viewDirectoryPath = array();
    
    /**
     * Model Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $modelDirectoryPath = array();
    
    /**
     * Library Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $libraryDirectoryPath = array();
    
    /**
     * Foundations Directory Path
     *
     * @var Array
     * @access protected
     */
    protected $foundationsDirectoryPath = array();
    
    
    /** 
     * Constructor
     * Constant contain my full path to Model, View, Controllers,Library and Foundations
     * Directories.
     *
     * @Constant MPATH,VPATH,CPATH,LPATH,FPATH
     */
     
    public function __construct()
    {
        $this->modelDirectoryPath      = 'C:\Users\Alessio\Desktop\Summertime\Summertime\Entity';
        $this->viewDirectoryPath        = 'C:\Users\Alessio\Desktop\Summertime\Summertime\View';
        $this->controllerDirectoryPath = 'C:\Users\Alessio\Desktop\Summertime\Summertime\Control';
        $this->libraryDirectoryPath     = 'C:\Users\Alessio\Desktop\Summertime\Summertime\lib';
        $this->foundationsDirectoryPath     = 'C:\Users\Alessio\Desktop\Summertime\Summertime\Foundations';
        
        spl_autoload_register(array($this,'load_controller'));
        spl_autoload_register(array($this,'load_model'));
        spl_autoload_register(array($this,'load_library'));
        spl_autoload_register(array($this,'load_foundations'));
        spl_autoload_register(array($this,'load_view'));
   
        //log_message('debug',"Loader Class Initialized");
    }

    /** 
     *-----------------------------------------------------
     * Load Library
     *-----------------------------------------------------
     * Method for load library.
     * This method return class object.
     *
     * @library String
     * @param String
     * @access public
     */    
    public function load_library($library, $param = null)
    {
        if (is_string($library)) {
            return $this->initialize_class($library);
        }
        if (is_array($library)) {
            foreach ($library as $key) {
                return $this->initialize_class($library);
            }
        }                
    }

    /** 
     *-----------------------------------------------------
     * Initialize Class
     *-----------------------------------------------------
     * Method for initialise class
     * This method return new object. 
     * This method can initialize more class using (array)
     *
     * @library String|Array
     * @param String
     * @access public
     */    
    public function initialize_class($library)
    {
        try {
            if (is_array($library)) {
                foreach($library as $class) {
                    $arrayObject =  new $class;
                }            
                return $this;
            }
            if (is_string($library)) {
                $stringObject = new $library;
            }else {
                throw new ISException('Class name must be string.');
            }
            if (null == $library) {
                throw new ISException('You must enter the name of the class.');
            }
        } catch(Exception $exception) {
            echo $exception;
        }
    }    
    
    /**
     * Autoload Controller class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_controller($controller)
    {
        if ($controller) {
            set_include_path($this->controllerDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }    
    

      /**
     * Autoload Model class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_model($model)
    {
        if ($model) {
            set_include_path($this->modelDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }    
    

     /**
     * Autoload Foundations class
     *
     * @param  string $class
     * @return object
     */
     
    public function load_foundations($foundations)
    {
        if ($foundations) {
            set_include_path($this->foundationsDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }

    public function load_view($view)
    {
        if ($view) {
            set_include_path($this->viewDirectoryPath);
            spl_autoload_extensions('.php');
            spl_autoload($class);
        }
    }
    

    
}

?>