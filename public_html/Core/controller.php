<?php 

    function redirect($url) {
        header("Location: $url");
        exit();
    }

    function conectateModel() {
        require_once(__DIR__ . "/model.php");
    }    

    class controladorCustomer {
        private $modelo1;

        public function __construct() {
            conectateModel();
            $this->modelo1 = new modelCustomers();
        }

        // Guardar
        public function guardar($nombre, $contactName, $address, $city, $postalCode, $country) {
            $id = $this->modelo1->insertarCustomer($nombre, $contactName, $address, $city, $postalCode, $country);
            if ($id != false) {
                return redirect("show.php?id=" . $id);
            } else {
                return redirect("create.php");
            }
        }

        // Mostrar un usuario
        public function show($CustomerID) {
            $customer = $this->modelo1->mostrarCustomer($CustomerID);
            if ($customer) {
                return $customer;
            } else {
                redirect("list.php");
            }
        }

        // Mostrar todos los usuarios
        public function index() {
            $customers = $this->modelo1->mostrarTodoCustomer();
            if ($customers) {
                return $customers;
            } else {
                return false;
            }
        }

        // Actualizar la información en la base de datos y redirigir
        public function update($CustomerID, $CustomerName, $ContactName, $Address, $City, $PostalCode, $Country) {
            // Almacenar el resultado de la operación de actualización en una variable
            $actualizacionExitosa = $this->modelo1->actualizarCustomer($CustomerID, $CustomerName, $ContactName, $Address, $City, $PostalCode, $Country);
    
            if ($actualizacionExitosa) {
                redirect("show.php?id=" . $CustomerID);
            } else {
                redirect("list.php");
            }
            exit();
        }
        
        // Eliminar el usuario
        public function delete($CustomerID) {
            if ($this->modelo1->eliminarCustomer($CustomerID)) {
                redirect("list.php");
            } else {
                redirect("show.php?id=" . $CustomerID);
            }
            exit();
        }
    }

    class controladorEmployees{
        private $modelEmployee;

        public function __construct(){
            conectateModel();
            $this->modelEmployee = new ModelEmployees();
        }

        public function guardarEmpleado($LastName, $FirstName, $BirthDate, $Photo, $Notes){
            $id = $this-> modelEmployee-> insertarEmployee($LastName, $FirstName, $BirthDate, $Photo, $Notes);
            if ($id != false) {
                return redirect("show.php?id=" . $id);
            } else {
                return redirect("create.php");
            }
        }

        public function verEmpleado($EmployeeID){
            $employee = $this-> modelEmployee->mostrarEmployee($EmployeeID);
            if($employee){
                return $employee;
            }else{
                redirect("list.php");
            }
        }

        public function indexarEmpleado(){
            $employee = $this->modelEmployee->mostrarTodoEmployee();
            if ($employee) {
                return $employee;
            } else {
                return false;
            }
        }

        public function actualizarEmpledo($EmployeeID, $LastName, $FirstName, $BirthDate, $Photo, $Notes){
            $actualizacionExitosa = $this->modelEmployee->actualizarEmployee($EmployeeID, $LastName, $FirstName, $BirthDate, $Photo, $Notes);
    
            if ($actualizacionExitosa) {
                redirect("show.php?id=" . $EmployeeID);
            } else {
                redirect("list.php");
            }
            exit();
        }

        public function eliminarEmpleado($EmployeeID){
            $eliminarCorrecta = $this->modelEmployee->eliminarEmployee($EmployeeID);
            if ($eliminarCorrecta) {
                redirect("list.php");
            }else{
                redirect("show.php?id=" . $EmployeeID);
            }
        }
    }

    class controladorSuppliers{
        private $modeloSupplier;

        public function __construct(){
            conectateModel();
            $this->modeloSupplier= new ModelSuppliers();
        }

        public function guardarProveedor($SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone){
            $id = $this->modeloSupplier->insertarSupplier($SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone);
            if ($id != false) {
                return redirect("show.php?id=" . $id);
            } else {
                return redirect("create.php");
            }
        }

        public function verProveedor($SupplierID){
            $supplier = $this->modeloSupplier->mostrarSupplier($SupplierID);
            if ($supplier) {
                return $supplier;
            } else {
                redirect("list.php");
            }
        }

        public function indexarProveedor(){
            $supplier = $this->modeloSupplier->mostrarTodoSupplier();
            if ($supplier) {
                return $supplier;
            } else {
                return false;
            }
        }

        public function actualizarProveedor($SupplierID,$SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone){
            $actualizacionExitosa = $this->modeloSupplier->actualizarSupplier($SupplierID,$SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone);
    
            if ($actualizacionExitosa) {
                redirect("show.php?id=" . $SupplierID);
            } else {
                redirect("list.php");
            }
            exit();
        }

        public function eliminarProveedor($SupplierID){
            if ($this->modeloSupplier->eliminarSupplier($SupplierID)) {
                redirect("list.php");
            } else {
                redirect("show.php?id=" . $SupplierID);
            }
            exit();
        }
    }

    class controladorCategories{
        private $modeloCategories;
        public function __construct(){
            conectateModel();
            $this->modeloCategories = new ModelCategories();
        }
        public function guardarCategoria($CategoryName, $Descripcion){
            $id = $this->modeloCategories->insertarCategories($CategoryName, $Descripcion);
            if ($id != false) {
                return redirect("show.php?id=" . $id);
            } else {
                return redirect("create.php");
            }
        }

        public function verCategories($CategoryID){
            $categorie = $this-> modeloCategories->mostrarCategories($CategoryID);
            if($categorie){
                return $categorie;
            }else{
                redirect("list.php");
            }
        }

        public function indexarCategories(){
            $categorie = $this->modeloCategories->mostrarTodoCategories();
            if($categorie){
                return $categorie;
            } else {
                return false;
            }
        }

        public function actualizarCategories($CategoryID, $CategoryName, $Descripcion){
            $actualizacionExitosa = $this->modeloCategories->actualizarCategories($CategoryID, $CategoryName, $Descripcion);
            if($actualizacionExitosa){
                redirect("show.php?id=".$CategoryID);
            }else{
                redirect("list.php");
            }
            exit();
        }
        public function eliminarCategoria($CategoryID){
            $eliminarCorrecta = $this->modeloCategories->eliminarCategories($CategoryID);
            if($eliminarCorrecta){
                redirect("list.php");
            }else{
                redirect("show.php?id=".$CategoryID);
            }
        }
    }

?>
