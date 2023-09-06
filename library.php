<?

class library {
    public $DB;
    public $SQL;

    function set($var, $data) {
        $this->$var = $data;
    }
    function get($var){
        return $this->$var;
    }
    function __construct() {
        $vars = get_defined_vars();
        if (isset($vars['SQL'])) { $this->$SQL = $vars['SQL']; }
        if (!isset($this->$DB) && isset($this->$SQL)) {
            $this->$DB = mysqli(
                $this->$SQL['HOST'],
                $this->$SQL['USER'],
                $this->$SQL['PASS'],
                $this->$SQL['DB']);
        }
    }
}
$vars['SQL']['HOST'] == 'localhost'
$vars['SQL']['USER'] == 'root'
$vars['SQL']['PASS'] == 'Cpj21384!'
$vars['SQL']['DB'] == 'main_db'


$lib = new library($vars);