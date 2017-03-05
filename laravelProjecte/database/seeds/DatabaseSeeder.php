<?php

use Illuminate\Database\Seeder;
use App\Productos;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		self::seedCatalog();
		$this->command->info('Tabla productos inicializada con datos!');

		self::seedUsers();
    	$this->command->info('Tabla usuarios inicializada con datos!');
	}
	
	public function seedCatalog()
	{
		DB::table('productos')->delete();
		foreach( $this->arrayProductos as $producto ) {
		    $p = new Productos;
		    $p->nombre = $producto['nombre'];
		    $p->cantidad = $producto['cantidad'];
		    $p->precio = $producto['precio'];
		    $p->url = $producto['url'];
		    $p->stock = $producto['stock'];
		    $p->descripcion = $producto['descripcion'];
		    $p->save();
		}
	}
	private function seedUsers()
	{
		DB::table('users')->delete();
		foreach($this->arrayUsers as $users){
			$us = new User;
			$us->name = $users['name'];
			$us->email = $users['email'];
			$us->password = bcrypt($users['password']);
			$us->save();
		}
	}


	private $arrayProductos = array(
		array(
			'nombre' => 'Rábanos Maresme (Antolín)',
			'cantidad' => '200g',
			'precio' => '0.86',
			'url' => 'https://www.ulabox.com/media/52195_xl.jpg', 
			'stock' => false, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Maresme-España.Los rábanos son una verdura de tamaño pequeño (2 o 3 cm de diámetro) y de forma ovalada. Tienen una tonalidad rojiza en el exterior y la carne del interior es blanca.Es un alimento que destaca por su sabor ligeramente picante. Su contenido calórico es bajo debido a su alto contenido de agua. También tiene vitamina C y minerales que hacen que sean antioxidantes y que ayuden a mantener en buen estado la piel. También son beneficiosos para el aparato digestivo.Habitualmente, este producto se utiliza crudo en ensaladas.Te llevamos a casa un manojo de un mínimo de 200gr de rábanos.'
		),
		array(
			'nombre' => 'Ciruela Roja (Cultivar)',
			'cantidad' => '500g',
			'precio' => '1.98',
			'url' => 'https://www.ulabox.com/media/64341_xl.jpg', 
			'stock' => true, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Sudáfrica Categoría: Primera.Las ciruelas frescas constituyen uno de los mejores remedios para prevenir el estreñimiento. Esta propiedad les viene otorgada por su riqueza en fibras - especialmente pectina, fructosa y el azufre. Se ha comprobado como la fructosa y el azufre presentan propiedades laxantes. Las ciruelas frescas son laxantes muy eficaces.Te llevamos a casa entre 4 y 5 unidades.'
		)
	);
			
   }