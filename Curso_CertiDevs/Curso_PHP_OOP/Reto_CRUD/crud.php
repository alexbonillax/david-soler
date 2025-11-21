<?php

class Customer
{
    public $id;
    public $nombre;
    public $email;
    public $telefono;


    public function __construct($id, $nombre, $email, $telefono)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }
}

$customers = [];

function generarId($customers){
    return count($customers) > 0 ? max(array_map(fn($c) => $c->id, $customers)) + 1 : 1;
}

function crearCliente(&$customers, $nombre, $email, $telefono){
    $id = generarId($customers);
    $nuevoCliente = new Customer($id, $nombre, $email, $telefono);
    $customers[] = $nuevoCliente;
    print_r("Cliente creado con el ID: $id" . PHP_EOL);
}

function mostrarClientes($customers){
    if (empty($customers)) {
        print_r("No hay clientes el el array. Vuelve a intentar más tarde" . PHP_EOL);
    }else{
        print_r("Listado de clientes" . PHP_EOL);
        foreach ($customers as $c){
            print_r("ID: $c->id"  . PHP_EOL . "Nombre $c->nombre"  . PHP_EOL . "Email $c->email"  . PHP_EOL ."Telefono $c->telefono" .PHP_EOL);
        }
    }
}

function actualizarCliente(&$customers, $id, $nombre, $email, $telefono){
    foreach ($customers as $c){
        if ($c->id == $id){
            $c->nombre = $nombre;
            $c->email = $email;
            $c->telefono = $telefono;
            print_r("Cliente actualizado con el ID: $id" . PHP_EOL);
            return;
        }
    }
    print_r("No se encontró el cliente con el ID: $id para actualizar" . PHP_EOL);
}

function eliminarCliente(&$customers, $id){
    foreach ($customers as $c){
        if ($c->id == $id){
            unset($customers[$id]);
            $customers = array_values($customers);
            print_r("Cliente eliminado con el ID: $id" . PHP_EOL);
            return;
        }
    }
    print_r("No se encontró ningún cliente con el ID: $id para eliminar" . PHP_EOL);
}



print_r("--- DEMO EJERCICIO CRUD ---" . PHP_EOL);

crearCliente($customers, "Paco Soriano", "paco@hotmail.com", "711722642");
crearCliente($customers, "Maria Martinez", "maria@gmail.es", "173737273");

mostrarClientes($customers);

actualizarCliente($customers, 1, "Paco Garcia", "paco2@hotmail.com", "123287382");

mostrarClientes($customers);

eliminarCliente($customers, 2);

mostrarClientes($customers);




// VARIABLE POR REFERENCIA
function cambio(&$b){
    $b = 5;
}

$a = 10;
cambio($a);

print_r($a);
