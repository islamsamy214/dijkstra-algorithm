<?php

class Dijkstra{
    private $graph = [];
    private $costs = [];
    private $parents = [];
    private $processed = [];

    public function __construct()
    {
        $this->graph['start']['a'] = 6;
        $this->graph['start']['b'] = 2;
        $this->graph['a']['fin'] = 1;
        $this->graph['b']['a'] = 3;
        $this->graph['b']['fin'] = 5;
        $this->graph['fin'] = [];

        $this->costs['a'] = 6;
        $this->costs['b'] = 2;
        $this->costs['fin'] = INF;

        $this->parents['a'] = "start";
        $this->parents['b'] = "start";
        $this->parents['fin'] = null;
    }

    public function search(){
        $node = $this->findTheLowestCostedNode($this->costs);#b/a
        
        while ($node != 'fin'){
            $cost = $this->costs[$node];#2/3
            $neighbors = $this->graph[$node];#a - fin/fin

            foreach($neighbors as $neighbor => $neighbor_cost){#a - 3/fin //fin
                $new_cost = $neighbor_cost + $cost;#5/INF //INF
                if ($new_cost < $this->costs[$neighbor]){
                    $this->costs[$neighbor] = $new_cost;#a - 5
                    $this->parents[$neighbor] = $node;#a - b
                }
                array_push($this->processed,$node);#b //a
                $node = $this->findTheLowestCostedNode($this->costs);#a
            }
        }
        echo 'i moved from ';
        foreach ($this->processed as $node){
            echo $node . ' then ';
        }
        echo 'finish';
    }

    public function findTheLowestCostedNode($costs){
        $the_lowest_cost = INF;
        $lowest_costed_node = 'fin';
        foreach ($costs as $node => $cost){
            if($cost < $the_lowest_cost && !(is_int(array_search($node,$this->processed)))){
                $the_lowest_cost = $cost;#5
                $lowest_costed_node = $node;#a
            }
        }
        return $lowest_costed_node;
    }
}

$testing = new Dijkstra();
$testing->search();

?>