<?php
$xpdo_meta_map['alvResource']= array (
  'package' => 'alv',
  'version' => '1.1',
  'table' => 'alv_resources',
  'extends' => 'xPDOObject',
  'fields' => 
  array (
    'id' => NULL,
    'language' => NULL,
    'pagetitle' => '',
    'longtitle' => '',
    'description' => '',
    'alias' => '',
    'link_attributes' => '',
    'introtext' => NULL,
    'content' => NULL,
    'menutitle' => '',
    'uri' => NULL,
    'uri_override' => 0,
    'properties' => NULL,
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'integer',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'index' => 'pk',
    ),
    'language' => 
    array (
      'dbtype' => 'char',
      'precision' => '2',
      'phptype' => 'string',
      'null' => false,
      'index' => 'pk',
    ),
    'pagetitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'longtitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'description' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'alias' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
      'index' => 'index',
    ),
    'link_attributes' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'introtext' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'content' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'menutitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'uri' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
      'index' => 'index',
    ),
    'uri_override' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'properties' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'json',
      'null' => true,
    ),
  ),
  'indexes' => 
  array (
    'pk' => 
    array (
      'alias' => 'pk',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'language' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'alias' => 
    array (
      'alias' => 'alias',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'alias' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'uri' => 
    array (
      'alias' => 'uri',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'uri' => 
        array (
          'length' => '333',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'uri_override' => 
    array (
      'alias' => 'uri_override',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'uri_override' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'content_ft_idx' => 
    array (
      'alias' => 'content_ft_idx',
      'primary' => false,
      'unique' => false,
      'type' => 'FULLTEXT',
      'columns' => 
      array (
        'pagetitle' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'longtitle' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'description' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'introtext' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
        'content' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Resource' => 
    array (
      'class' => 'modResource',
      'local' => 'id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
