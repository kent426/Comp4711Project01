<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Student Class.
 * It has a surname and a first_name, and an array of emails, and an array of grades.
 *
 * @author Kent
 */
class Student {
    
    /**
     * Construct an empty student.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /**
     * Add email to the array of emails.
     * @param String $which The description of the added email.
     * @param String $address The added email address.
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    /**
     * Add grade to the array of grades.
     * @param Integer $grade The added grade.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /**
     * Calculate and return the average of all the grades.
     * @return Integer The average of the grades.
     */
    function average(){
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }  
    
    /**
     * Return a string to represent the student.
     * @return String The information of the student.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= '(' . $this->average() . ")\n\n";
        foreach( $this->emails as $which=>$what) {
            $result .= $which . ':' . $what . "\n";
        }
        $result .= "\n\n\n";
        return '<pre>' . $result . '</pre>';
    }    
}
