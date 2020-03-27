<?php defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Alter_projects_warnedxperiod extends CI_Migration
{
    public function up()
    {
        ## Alter Table projects
        $fields = [
            'warnedxperiod' => [
                'type' => 'int',
                'constraint' => '1',
                'null' => false,
                'default' => '0',
                'unsigned' => true
            ]
        ];
        $columns = Project::table()->columns;
        if (!array_key_exists("warnedxperiod", $columns)) {
            $this->dbforge->add_column('projects', $fields);
        }
    }

    public function down()
    { }
}
