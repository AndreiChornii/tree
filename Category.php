<?php

require './includes/DatabaseConnection.php';

class Category {

    private $DB;
    private $query_string;

    public function __construct($DB, string $query_string) {
        $this->DB = $DB;
        $this->query_string = $query_string;
    }

    /**
     * @return array
     * Получаем все категории
     */
    public function getData() {
        $pdo = $this->DB->getPdo();
        $result = $this->DB->query($pdo, $this->query_string);

        return $result->fetchAll();
    }

    /**
     * @param $data
     * @return mixed
     * Строим дерево
     */
//    public function createTree($data) {
//        $parents = [];
//        foreach ($data as $key => $item):
//            $parents[$item->parent_id][$item->id] = $item;
//        endforeach;
//        $treeElem = $parents[0];
//        $this->generateElemTree($treeElem, $parents);
//        return $treeElem;
//    }

    public function createTree($data) {
        $parents = [];
        foreach ($data as $key => $item):
            $parents[$item['parent_id']][$item['id']] = $item;
        endforeach;
        $treeElem = $parents[0];
        $this->generateElemTree($treeElem, $parents);
        return $treeElem;
    }

    /**
     * @param $treeElem
     * @param $parents
     * Генерируем элементы дерева с учётом удобного вывода потомков
     */
//    private function generateElemTree(&$treeElem, $parents) {
//        foreach ($treeElem as $key => $item):
//            if (!isset($item->children)):
//                $treeElem[$key]->children = [];
//            endif;
//
//            if (array_key_exists($key, $parents)):
//                $treeElem[$key]->children = $parents[$key];
//                $this->generateElemTree($treeElem[$key]->children, $parents);
//            endif;
//        endforeach;
//    }
    
    private function generateElemTree(&$treeElem, $parents) {
        foreach ($treeElem as $key => $item):
            if (!isset($item['children'])):
                $treeElem[$key]['children'] = [];
            endif;

            if (array_key_exists($key, $parents)):
                $treeElem[$key]['children'] = $parents[$key];
                $this->generateElemTree($treeElem[$key]['children'], $parents);
            endif;
        endforeach;
    }

    /**
     * @param $data
     * Рендерим вид
     */
//    public function renderTemplate($data) {
//        echo "<ul>";
//        if (is_array($data)):
//            foreach ($data as $item):
//                echo '<li>';
//                echo "<a href=\"/?=/{$item->id}\">";
//                echo $item->name;
//                echo "</a>";
//                if (count($item->children) > 0):
//                    $this->renderTemplate($item->children);
//                endif;
//                echo '</li>';
//            endforeach;
//        endif;
//        echo "</ul>";
//    }
    
    public function renderTemplate($data) {
        echo "<ul>";
        if (is_array($data)):
            foreach ($data as $item):
                echo '<li>';
                echo "<a href=\"/?=/{$item['id']}\">";
                echo $item['name'];
                echo "</a>";
                if (count($item['children']) > 0):
                    $this->renderTemplate($item['children']);
                endif;
                echo '</li>';
            endforeach;
        endif;
        echo "</ul>";
    }

}
