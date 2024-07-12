<?php

class DebugVariables
{

    protected $variables = [];

    function save($key, $value)
    {
        $this->variables[$key] = $value;
    }


    function showVariables()
    {
        echo '<table><thead><tr><th>name</th><th>type</th><th>value</th></tr></thead><tbody>';
        foreach ($this->variables as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<th>' . gettype($value) . '</th>';
            echo '<td>';
            debug($value);
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    }
}
