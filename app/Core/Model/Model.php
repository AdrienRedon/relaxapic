<?php 

namespace App\Core\Model;

use App\Core\DependencyInjection\ContainerAware;
use App\Libs\Collection;
use App\Core\Database\DatabaseInterface;

class Model extends ContainerAware 
{
    /**
     * Implementation of the database interface
     * @var \Libs\Interfaces\DatabaseInterface
     */
    protected $db;
    
    /**
     * Name of the table to alter
     * @var string
     */
    protected $table;
    
    /**
     * If the model has a created_at and a updated_at field
     * @var boolean
     */
    protected $timestamps = false;
    
    /**
     * id of the active record
     * @var int
     */
    public $id;

    /**
     * List of the fillable fields
     * @var array
     */
    protected $fields;

    /**
     * Hidden fields
     * @var array
     */
    protected $hidden = array();

    /**
     * Querying Relations
     * @var array Name of the field => model to query
     */
    protected $has_one = array();
    protected $has_many = array();
    protected $belongs_to = array();
    protected $belongs_to_many = array();

    /**
     * Constructor
     */ 
    public function __construct(DatabaseInterface $db, ContainerInterface $container = null)
    {
        $this->setContainer($container);
        $this->db = $db;
    }
}