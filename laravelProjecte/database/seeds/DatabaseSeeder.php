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
		),
		array(
			'nombre' => 'Naranja de Zumo Tollupol en Malla 2Kg (Tollupol)',
			'cantidad' => '2Kg',
			'precio' => '2.00',
			'url' => 'https://www.ulabox.com/media/80281_l1.jpg', 
			'stock' => true, 
			'descripcion' => 'Con las naranjas de zumo de Tollupol conseguirás hacer unos zumos naturales deliciosos.Entre las numerosas propiedades de la naranja, destacamos que es una ruta desintoxicante, digestiva, antiséptica intestinal, urinaria ,etc. Todas estas propiedades la convierten en una fruta recomendable en casos de enfermedades hepáticas, estreñimiento, diabetes, uremia, gota y esclerosis, ya que realiza una auténtica cura de desintoxicación y lavado interno.#ElAntiSúper pone la materia prima, ahora solo queda que vosotros pongáis las ganas y hagáis un buen zumo de naranja natural.'
		),
		array(
			'nombre' => 'Pera Conference - 4 unidades (La Breña)',
			'cantidad' => '800g',
			'precio' => '1.75',
			'url' => 'https://www.ulabox.com/media/33050_xl.jpg', 
			'stock' => true, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Nacional Calibre: 65/75mm. Categoría: Primera.La pera Conferencia contiene el 53% de las sales minerales alcalinas y el 47% de sales ácidas. Las principales vitaminas de esta fruta son: A, C, B1, B2, y PP. Por su alto contenido en hierro, el consumo de pera es bueno para la formación de glóbulos rojos y se recomienda en casos de anemia y problemas cardiovasculares. El contenido de su pulpa en pectina la convierte en muy eficaz para el aparato digestivo, ya que aligera la pesadez de estómago y ayuda a la digestión. Además, la pectina regula el tránsito intestinal y reduce el nivel de colesterol en sangre. Así mismo, la celulosa que contiene esta fruta actúa como laxante.Te llevamos a casa 4 unidades.'
		),
		array(
			'nombre' => 'Fresón Extra (Antolín)',
			'cantidad' => '500g',
			'precio' => '2.80',
			'url' => 'https://www.ulabox.com/media/57317_xl.jpg', 
			'stock' => true, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Huelva Categoría: Extra.La fresa Candonga/Sabrina se caracteriza por presentar pocas calorías debido a su elevado contenido en agua (90%), por lo que la hace ideal en dietas de adelgazamiento. Presenta propiedades diuréticas, estimula el hígado, la vejiga y el colon, con lo que ayuda a digerir las grasas, siendo pues muy recomendable en digestiones pesadas. Su elevado contenido en vitamina C y en antocianinas, le otorga un fuerte poder antioxidante que evita el envejecimiento de las células.'
		),
		array(
			'nombre' => 'Kiwi Hayward Zespri - 4 unidades (Cultivar)',
			'cantidad' => '500g',
			'precio' => '2.15',
			'url' => 'https://www.ulabox.com/media/33034_xl.jpg', 
			'stock' => true, 
			'descripcion' => 'Origen: Nueva Zelanda Calibre: 100/115gr. Categoría: Primera.Los kiwis Hayward se encuentran entre las frutas con más vitamina C, superando a naranjas y limones. La vitamina C tiene un fuerte poder antioxidante que neutraliza los radicales libres, previniendo asÌ el envejecimiento celular. Contiene vitamina E y ácidos grasos omega-3 y omega-6 que poseen propiedades fluidificantes de la sangre y mejora el esto de las arterias. Es destacable la proporción de fibra soluble, que mejora las situaciones de estreñimiento y nos ayuda a reducir el colesterol.'
		),
		array(
			'nombre' => 'Calçots - manojo 25 unidades (La Breña)',
			'cantidad' => '25u',
			'precio' => '4.06',
			'url' => 'https://www.ulabox.com/media/81613_l1.jpg', 
			'stock' => true, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Excepcionalmente, te entregaremos este producto aunque no vivas en el Área Metropolitana de Barcelona. Sin embargo, si vives fuera del Área Metropolitana de Barcelona, este producto te provocará un retraso de un día en la entrega.El calçot es una variedad de cebolla tierna más suave y dulce originaria del campo de Tarragona y que se comen escalibados.Sus propiedades nutritivas son similares a las de la cebolla, con un amplio contenido en vitaminas y minerales. Además, se le atribuyen propiedades diuréticas, tonificantes, digestivas y afrodisíacas. Se ha comprobado que contienen algunos agentes anticancerígenos.'
		),
		array(
			'nombre' => 'Calabaza (Antolín)',
			'cantidad' => '1.4Kg',
			'precio' => '3.49',
			'url' => 'https://www.ulabox.com/media/52629_xl.jpg', 
			'stock' => true, 
			'descripcion' => 'Garantía de frescura: este producto se prepara el mismo día que recibes tu pedido.Origen: Valencia- España.La calabaza es el alimento antioxidante por excelencia. Además tiene un nivel relevante de carotenos los cuales son recomendados para prevenir el cáncer y de fibra la cual previene el estreñimiento. También destaca por ser ligero, esto hace que sea un alimento indicado para dietas.Hay una amplia variedad de recetas que se pueden hacer con calabaza, desde cremas (tanto frías como calientes), tartas, hasta calabazas rebozadas.'
		)
	);
			
   }
