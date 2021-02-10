<?php

class Requirement
{
    private $id;
    private $progID;
    private $section;
    private $fieldName;

    public function __construct($id, $progID, $section, $fieldName)
    {
        $this->id = $id;
        $this->progID = $progID;
        $this->section = $section;
        $this->fieldName = $fieldName;
    }

    /**
     * @return mixed
     */
    public function get_id()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function set_id($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function get_prog_ID()
    {
        return $this->progID;
    }

    /**
     * @param mixed $progID
     */
    public function set_prog_ID($progID)
    {
        $this->progID = $progID;
    }

    /**
     * @return mixed
     */
    public function get_field_name()
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     */
    public function set_field_name($fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * @return mixed
     */
    public function get_section()
    {
        return $this->section;
    }

    /**
     * @param mixed $section
     */
    public function set_section($section)
    {
        $this->section = $section;
    }

    public function to_array()
    {
        return [
            'ID' => $this->get_id(),
            'prog_ID' => $this->get_prog_ID(),
            'section' => $this->get_section(),
            'Field_Name' => $this->get_field_name()
        ];
    }
}