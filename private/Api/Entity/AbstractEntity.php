<?php

  namespace Api\Entity;

  class AbstractEntity implements \JsonSerializable {


    public function getColumn($var = NULL) {
      if($var != NULL && isset($this->$var))
        return $this->$var;
      else
        return 'error';
    }


    public function getColumns() {
      $blacklist = ['__initializer__','__cloner__','__isInitialized__'];
      $return = [];
      //var_dump($this);
      foreach ($this as $key => $value) {
        if(in_array($key, $blacklist)) {
          continue;
        }
        $return[$key] = $value;
      }
      return $return;
    }


    public function jsonSerialize() {
      return $this->getColumns();
    }

    /**
     * Application constructor.
     * @param $id
     */
    public function __construct($id) {
      $this->id = $id;
    }

  }

