<?php

require_once("ModelBase.php");

// Modelo específico para Customers
class ModelCustomers extends ModelBase {

    // Inserta un nuevo registro en la tabla customers
    public function insertarCustomer($CustomerName, $ContactName, $Address, $City, $PostalCode, $Country) {
        $data = [
            'CustomerName' => $CustomerName,
            'ContactName' => $ContactName,
            'Address' => $Address,
            'City' => $City,
            'PostalCode' => $PostalCode,
            'Country' => $Country
        ];
        return $this->insertar('customers', $data);
    }

    // Muestra un registro específico de la tabla customers
    public function mostrarCustomer($CustomerID) {
        return $this->mostrar('customers', $CustomerID, 'CustomerID');
    }

    // Muestra todos los registros de la tabla customers
    public function mostrarTodoCustomer() {
        return $this->mostrarTodo('customers');
    }

    // Actualiza un registro específico de la tabla customers
    public function actualizarCustomer($CustomerID, $CustomerName, $ContactName, $Address, $City, $PostalCode, $Country) {
        $data = [
            'CustomerName' => $CustomerName,
            'ContactName' => $ContactName,
            'Address' => $Address,
            'City' => $City,
            'PostalCode' => $PostalCode,
            'Country' => $Country
        ];
        return $this->actualizar('customers', $data, $CustomerID, 'CustomerID');
    }

    // Elimina un registro específico de la tabla customers
    public function eliminarCustomer($CustomerID) {
        return $this->eliminar('customers', $CustomerID, 'CustomerID');
    }
}


class ModelEmployees extends ModelBase{
    public function insertarEmployee($LastName, $FirstName, $BirthDate, $Photo, $Notes){
        $data = [
            'LastName' => $LastName,
            'FirstName' => $FirstName,
            'BirthDate' => $BirthDate,
            'Photo' => $Photo,
            'Notes'  => $Notes
        ];
        return $this -> insertar('employees', $data);
    }

    public function mostrarEmployee($EmployeeID){
        return $this->mostrar('employees', $EmployeeID, 'EmployeeID');
    }

    public function mostrarTodoEmployee(){
        return $this->mostrarTodo('employees');
    }
    // $LastName, $FirstName, $BirthDate, $Photo, $Notes
    public function actualizarEmployee($EmployeeID, $LastName, $FirstName, $BirthDate, $Photo, $Notes){
        $data =[
            'LastName' => $LastName,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'BirthDate' => $BirthDate,
            'Photo' => $Photo,
            'Notes' => $Notes
        ];
        return $this-> actualizar('employees', $data, $EmployeeID, 'EmployeeID');
    }

    public function eliminarEmployee($EmployeeID){
        return $this->eliminar('employees', $EmployeeID, 'EmployeeID');
    }
}

// Supplier
class ModelSuppliers extends ModelBase{
    public function insertarSupplier($SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone){
        $data = [
            'SuplierName' => $SuplierName,
            'ContacName' => $ContactName,
            'Address' => $Address,
            'City' => $City,
            'PostalCode' =>$PostalCode,
            'Country' => $Country,
            'Phone' => $Phone
        ];
        return $this->insertar('suppliers', $data);
    }

    public function mostrarSupplier ($SupplierID){
        return $this->mostrar('suppliers', $SupplierID, 'SupplierID');
    }

    public function mostrarTodoSupplier(){
        return $this->mostrarTodo('suppliers');
    }
    public function actualizarSupplier($SupplierID,$SuplierName, $ContactName,$Address, $City, $PostalCode, $Country, $Phone){
        $data = [
            'SupplierName' => $SuplierName,
            'ContacName' => $ContactName,
            'Address' => $Address,
            'City' => $City,
            'PostalCode' => $PostalCode,
            'Country' => $Country,
            'Phone' => $Phone
        ];
        return $this-> actualizar('suppliers', $data,$SupplierID,'SupplierID');
    }

    public function eliminarSupplier($SupplierID){
        return $this->eliminar('suppliers', $SupplierID, 'SupplierID');
    }
}

class ModelCategories extends ModelBase{
    public function insertarCategories($CategoryName, $Descripcion){
        $data = [
            'CategoryName' => $CategoryName,
            'Descripcion' => $Descripcion
        ];

        return $this -> insertar('categories', $data);
    }

    public function mostrarCategories ($CategoryID){
        return $this-> mostrar('categories', $CategoryID,'CategoryID');
    }

    public function mostrarTodoCategories(){
        return $this-> mostrarTodo('categories');
    }

    public function actualizarCategories($CategoryID, $CategoryName, $Descripcion){
        $data = [
            'CategoryName' => $CategoryName,
            'Descripcion' => $Descripcion
        ];
        return $this-> actualizar('categories', $data, $CategoryID, 'CategoryID');
    }

    public function eliminarCategories($CategoryID){
        return $this-> eliminar('categories', $CategoryID, 'CategoryID');
    }
}
?>
