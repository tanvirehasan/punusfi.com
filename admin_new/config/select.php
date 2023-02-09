<?php

// add project list
    class ProjectList {
        public function fetch_All() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM add_project ORDER BY project_id DESC ");
            $query->execute();
            return $query->fetchAll();
        }

        public function data_limit() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM add_project LIMIT 5");
            $query->execute();
            return $query->fetchAll();
        }
       
    }


    // Income list
    class IncomeList {
        public function fetch_All() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  add_income");
            $query->execute();
            return $query->fetchAll();
        }

        public function data_limit() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  add_income LIMIT 5");
            $query->execute();
            return $query->fetchAll();
        }
       
    }


     // Expense  list
    class ExpenseList {
        public function fetch_All() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  add_expense");
            $query->execute();
            return $query->fetchAll();
        }

        public function data_limit() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  add_expense LIMIT 5");
            $query->execute();
            return $query->fetchAll();
        }
       
    }

     // Expense Categorie list
    class ExpenseCategorie {
        public function fetch_All() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  expense_cat");
            $query->execute();
            return $query->fetchAll();
        }

        public function data_limit() {
            global $pdo;
            $query = $pdo->prepare("SELECT * FROM  expense_cat LIMIT 5");
            $query->execute();
            return $query->fetchAll();
        }
       
    }


?>