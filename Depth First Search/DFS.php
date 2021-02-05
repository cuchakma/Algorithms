<?php

$graph_value = array(
    array(0, 1, 1, 0, 0, 0),
    array(1, 0, 0, 1, 0, 0),
    array(1, 0, 0, 1, 1, 1),
    array(0, 1, 1, 0, 1, 0),
    array(0, 0, 1, 1, 0, 1),
    array(0, 0, 1, 0, 1, 0),
);


class Graph{

    protected $len     = ''; 
    protected $g       = [];
    protected $visited = array();

    public function __construct( $graph ) {
        $this->g   = $graph;
        $this->len = count($this->g);
        $this->Visited();
    }

    /**
     * To keep a track of the visited nodes, initially the values are assigned to 0. Indicating not visited
     */
    protected function Visited() {
        for( $i = 0; $i < $this->len; $i++ ) {
            $this->visited[$i] = 0;
        }
        
    }

    public function depthFirst( $vertex ) {
        $this->visited[$vertex] = 1;
        
        /**
         * printing the path
         */

        echo $vertex."\n";
        
        /**
         * traversing through the adjacent matrix & visited array
         */

        for( $i = 0; $i < $this->len; $i++ ) {

            /**
             * This condition is valid only if the graph array has an edge( value is 1 from one node to another ) & the visited array has a non visited value( 0 means not visited, 1 means visited )
             */

            if(  $this->g[$vertex][$i] == 1 && !$this->visited[$i] ) {
                /**
                 * if the condition is true the function calls itself, the process is recursive
                 */
                $this->depthFirst($i);
            }
        }
    }
}

$object = new Graph( $graph_value );
$object->depthFirst(4);     //starting from a node, root node 
 