-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2018 a las 17:25:28
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `quinta_ola`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `detalle` varchar(20000) NOT NULL,
  `fecha_creado` datetime NOT NULL,
  `fk_imagen` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_autor` varchar(100) NOT NULL,
  `fk_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `titulo`, `detalle`, `fecha_creado`, `fk_imagen`, `fk_seccion`, `fk_autor`, `fk_estatus`) VALUES
(1, 'Las sufragistas', '<p><strong>Luchas y reivindicaciones por el sufragio femenino en Am&eacute;rica Latina</strong></p>\r\n\r\n<p><em>&quot;Ha llegado la hora de la mujer que comparte una causa p&uacute;blica y ha muerto la hora de la mujer como valor inerte y num&eacute;rico dentro de la sociedad. Ha llegado la hora de la mujer que piensa, juzga, rechaza o acepta, y ha muerto la hora de la mujer que asiste, atada e impotente, a la caprichosa elaboraci&oacute;n pol&iacute;tica de los destinos de su pa&iacute;s, que es, en definitiva, el destino de su hogar&rdquo;</em></p>\r\n\r\n<p><em>Eva Duarte de Per&oacute;n</em></p>\r\n\r\n<p>Imaginarse una sociedad en la que la mitad de la poblaci&oacute;n sea vista como inferior, sin poder acceder a los mismos derechos que el resto, en la actualidad puede resultarnos chocante e intolerable. Pero esta realidad ocurr&iacute;a en la mayor&iacute;a de los pa&iacute;ses hace menos de un siglo, &eacute;poca en la que las mujeres viv&iacute;an (y en algunos contextos a&uacute;n viven) en clara desigualdad frente a los hombres. El mejor ejemplo se evidencia en el derecho al voto.</p>\r\n\r\n<p>A mediados del siglo XIX los movimientos de mujeres iniciaban el debate en torno a sus derechos en distintos &aacute;mbitos: econ&oacute;mico, social y pol&iacute;tico, ya que a pesar de haber alcanzado algunas reivindicaciones en el tema laboral (trabajo femenino en las f&aacute;bricas), segu&iacute;an relegadas al &aacute;mbito privado (dom&eacute;stico) en otras &aacute;reas como la educaci&oacute;n y la participaci&oacute;n pol&iacute;tica.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ese fue el caldo de cultivo que gest&oacute; el nacimiento del movimiento internacional sufragista, integrado por personas de diferentes clases sociales, con diversas expresiones y t&aacute;cticas de lucha. Su principal demanda era la extensi&oacute;n del sufragio a las mujeres, en un principio mediante el &ldquo;sufragio igual&rdquo;, el cual abol&iacute;a la diferencia por g&eacute;nero. El &ldquo;sufragio universal&rdquo; a&uacute;n no se planteaba, siendo considerado demasiado revolucionario en un contexto en el que a&uacute;n no se exig&iacute;a la abolici&oacute;n de la discriminaci&oacute;n por condici&oacute;n &eacute;tnica.</p>\r\n\r\n<p>La lucha sufragista feminista plante&oacute; diversas t&aacute;cticas: desde la organizaci&oacute;n, como la Alianza Internacional de Mujeres fundada en Berl&iacute;n en 1904, hasta la movilizaci&oacute;n y agitaci&oacute;n, expresada en marchas, manifestaciones y huelgas de hambre, a fin de llamar la atenci&oacute;n de la opini&oacute;n p&uacute;blica. En otros pa&iacute;ses, estos cambios se impulsaron desde el Estado, gracias a las mujeres que participaban de la vida pol&iacute;tica, como ocurri&oacute; en Espa&ntilde;a con Clara Campoamor, Victoria Kent y Margarita Nelken, en Argentina con Alicia Moreau de Justo y Eva Duarte y en M&eacute;xico con Elvia Carrillo Puerto.</p>\r\n\r\n<p><strong>&iquest;Y c&oacute;mo se organizaron en Am&eacute;rica Latina?</strong></p>\r\n\r\n<p>El movimiento sufragista fue vasto e importante, estuvo presente en casi todos los pa&iacute;ses latinoamericanos. Un buen ejemplo es el precedente chileno de 1875, en el que un grupo de mujeres se inscribi&oacute; para participar en las elecciones porque entend&iacute;a que cumpl&iacute;a con los requisitos establecidos en la Constituci&oacute;n de 1833. Pero la gran precursora del voto femenino fue la argentina Julieta Lanteri, que en 1910 solicit&oacute; a un juez nacional que se le otorgaran sus derechos como ciudadana, incluso los pol&iacute;ticos, convirti&eacute;ndose el 26 de noviembre de 1911 en la primera mujer americana en votar.</p>\r\n\r\n<p>El primer pa&iacute;s de Am&eacute;rica en aprobar el sufragio femenino fue Uruguay en 1927, en un plebiscito local organizado por la comunidad de Cerro Chato. La primera participaci&oacute;n femenina en una elecci&oacute;n nacional habr&iacute;a de esperar hasta el 27 de marzo de 1938. Una de las m&aacute;s notables feministas que impuls&oacute; esta lucha fue Paulina Luisi (1875-1949), primera mujer uruguaya que obtuvo el t&iacute;tulo de bachiller y de m&eacute;dica. Fue fundadora del Partido Socialista y cre&oacute; los primeros sindicatos femeninos de ese pa&iacute;s.</p>\r\n\r\n<p>Esta lucha tuvo su principal impulso en los congresos internacionales de mujeres realizados en Argentina (1910), Chile (1923), Per&uacute; (1924) y Colombia (1930) y en la labor de lideresas como la brasile&ntilde;a Bertha Lutz (1894-1976) pionera del feminismo y representante de la Liga de las Mujeres Sufragistas; la mexicana Elvia Carrillo Puerto (1878-1967) diputada del Congreso de Yucat&aacute;n en 1923, siendo una de las tres primeras mujeres elegidas para formar parte de un cuerpo legislativo en M&eacute;xico; las argentinas Alicia Moreau de Justo, quien elabor&oacute; en 1932 un proyecto de ley que establec&iacute;a el sufragio femenino, y Eva Duarte (1919-1952) incansable luchadora que reivindic&oacute; p&uacute;blicamente la igualdad de derechos entre el hombre y la mujer.</p>\r\n\r\n<p><strong>Las sufragistas en Venezuela&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>\r\n\r\n<p>En Venezuela la lucha por los derechos pol&iacute;ticos de las mujeres inicia en la d&eacute;cada de los 30 del siglo XX. Una de las organizaciones m&aacute;s importantes fue la Agrupaci&oacute;n Cultural Femenina (ACF), la cual ten&iacute;a un programa por la educaci&oacute;n y la cultura, tanto acad&eacute;mica como pol&iacute;tica de las mujeres. Su sede era lugar de encuentro para la discusi&oacute;n de temas como la reforma del C&oacute;digo Civil y el derecho al voto femenino (Delgado, 2015). Otra organizaci&oacute;n importante fue la Asociaci&oacute;n Venezolana de Mujeres (AVM) creada en 1936 por Ada P&eacute;rez Guevara.</p>\r\n\r\n<p>Sin embargo, las organizaciones que tuvieron como principal objetivo la lucha por el sufragio femenino fueron el Comit&eacute; Pro-sufragio y el frente amplio Acci&oacute;n C&iacute;vica Femenina, fundado en 1944 por Panchita Soublette Saluzzo, acompa&ntilde;ada de lideresas de la ACF y la AVM. En 1947, gracias a las luchas de estas mujeres, se consagra el sufragio universal, directo y secreto, dotando a las mujeres venezolanas de plenos derechos pol&iacute;ticos formales.</p>\r\n\r\n<p><strong>Aprobaci&oacute;n del sufragio femenino en Am&eacute;rica (cuadro aparte)</strong></p>\r\n\r\n<table border=\"1\" cellspacing=\"0\" style=\"width:318.85pt\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"border-color:#000001; vertical-align:top; width:155.85pt\">\r\n			<p>Pa&iacute;s</p>\r\n			</td>\r\n			<td style=\"border-color:#00000a; vertical-align:top; width:162.95pt\">\r\n			<p>A&ntilde;o</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Argentina</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1947&nbsp;&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Bahamas</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1960</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Barbados</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1950</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Bolivia</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1952</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Brasil</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1932</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Canad&aacute;</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1922</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Chile</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1934 (elecciones municipales), 1949 (elecciones presidenciales y parlamentarias)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Colombia</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1957</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Cuba</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1934</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Ecuador</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1929</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>El Salvador</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1939</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Estados Unidos</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1967 (mujeres negras; las mujeres blancas pod&iacute;an votar desde 1920)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Guatemala</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1945</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Guyana</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1953</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Hait&iacute;</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1950</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Honduras</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1955</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Antigua y Barbuda, Islas V&iacute;rgenes Brit&aacute;nicas, Montserrat, San Crist&oacute;bal y Nieves, Anguila)</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1951</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Granada, Santa Luc&iacute;a, San Vicente y las Granadinas, Dominica)</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1951</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Jamaica</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1944</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>M&eacute;xico</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1952</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Nicaragua</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1955</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Panam&aacute;</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1945</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Paraguay</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1961</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Per&uacute;</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1955</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Puerto Rico</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1929</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Rep&uacute;blica Dominicana</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1942</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Surinam</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1948</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Trinidad y Tobago</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1946</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Uruguay</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1917/1927(c)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"vertical-align:top; width:155.85pt\">\r\n			<p>Venezuela</p>\r\n			</td>\r\n			<td style=\"vertical-align:top; width:162.95pt\">\r\n			<p>1947</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Referencias</strong></p>\r\n\r\n<p>Delgado Jaramillo, L. R. (2015). <em>La lucha hist&oacute;rica de las mujeres venezolanas por su reivindicaci&oacute;n pol&iacute;tica y social</em> (1936-2010) (Master&#39;s thesis).</p>\r\n\r\n<p>V&eacute;lez, G. E. B. (2015). La Lucha de Las Mujeres en Am&eacute;rica Latina: Feminismo, ciudadan&iacute;a y derechos. <em>Revista Palobra,&quot; palabra que obra&quot;</em>, 8(8), 42-59.</p>\r\n\r\n<p>El sufragio femenino, Emma Goldman, 1910, en marxists.org</p>\r\n\r\n<p>El desarrollo del movimiento feminista: el triunfo del sufragismo 1870-1939, en historiasiglo20.org</p>\r\n\r\n<p><strong>Aimee Zambrano Ortiz</strong></p>\r\n', '2018-08-21 14:38:58', 1, 1, 'gpuerta', 2),
(2, '5 libros que toda feminista debe conocer', '<p>La 5ta Ola te trae una secci&oacute;n denominada Biblioteca Livia Gouverneur, (nombre que rememora a una joven venezolana luchadora y estudiante de los a&ntilde;os 60). En esta biblioteca recomendaremos bibliograf&iacute;a de autoras y autores que han tratado el tema del feminismo desde diversas &oacute;pticas y podr&aacute;s realizar sus descargas para que lleves tu libro en cualquier sitio que te encuentres y profundizar en un tema que ha sido muy estigmatizado como el feminismo.</p>\r\n\r\n<p>Ahora bien en ese proceso de decolonizaci&oacute;n de la memoria, tambi&eacute;n conocido como ruptura de paradigmas realizaremos la recomendaci&oacute;n de cinco indispensables bibliograf&iacute;as que c&oacute;mo feminista debes conocer.</p>\r\n\r\n<p><strong>1</strong><strong> Mujeres en tiempos de cambios de Iraida Vargas.</strong></p>\r\n\r\n<p>El Machismo es una ideolog&iacute;a que tiene fuertes ra&iacute;ces hist&oacute;ricas y una de las cosas m&aacute;s importantes es conocer como sus manifestaciones a trav&eacute;s del tiempo, Iraida Vargas en esta obra maestra, logra conectar la fundamental importancia de conocer la lucha de las mujeres en el pasado, ya que uno de los grandes &eacute;xitos del machismo es hacer a las mujeres invisibles, sin existencia y sin importancia, cosificarla para deshumanizarla y tratarla a su antojo. Este es un libro revelador, profundo y que logra explicarnos el por qu&eacute; de tantas cosas.</p>\r\n\r\n<p><strong>2</strong><strong> </strong><strong>El segundo sexo de Simone de Beauvoir </strong></p>\r\n\r\n<p>Esta obra del siglo XX, se considera fundamental en la historia del feminismo. El ensayo fue publicado en 1949 y explica los diversos arquetipos femeninos seg&uacute;n el rol de la mujer o las caracter&iacute;sticas que predominan en su personalidad: la madre, la hija, la esposa, la hetaira, la prostituta; y tambi&eacute;n la enamorada, la narcisista y la m&iacute;stica. En esa &eacute;poca De Beauvoir comparaba la situaci&oacute;n de la mujer con la opresi&oacute;n que padec&iacute;an los negros en los Estados Unidos. Este texto se ha convertido en un estandarte del pensamiento feminista y toda mujer deber&iacute;a leerlo.</p>\r\n\r\n<p>Imagen 3</p>\r\n\r\n<p><strong>3</strong><strong> Sobre la liberaci&oacute;n de la mujer de Alexandra Kollontai</strong></p>\r\n\r\n<p>La lucha por la independencia econ&oacute;mica, el matrimonio y el problema de la familia, la lucha por los derechos pol&iacute;ticos, son los ejes centrales de los escritos de esta gran mujer Alexandra Kollontai, as&iacute; que leerla ser&aacute; un ejercicio de reconfirmaci&oacute;n y afirmaci&oacute;n sobre la necesidad e importancia de la lucha.</p>\r\n\r\n<p><strong>4 </strong><strong>Mujeres Raza y Clase de &Aacute;ngela Davis</strong></p>\r\n\r\n<p>A lo largo de su vida, &Aacute;ngela se dio cuenta de que la igualdad entre blancos y negros s&oacute;lo podr&iacute;a hacerse realidad cuando tambi&eacute;n existiese paridad de derechos entre hombres y mujeres. Por eso, tambi&eacute;n se convirti&oacute; en una figura destacada del movimiento feminista, en la que destaca la lucha que las mujeres afrodescendientes han tenido en el mundo machista.</p>\r\n\r\n<p><strong>5 </strong><strong>Historia, Mujer, Mujeres de Iraida Vargas </strong></p>\r\n\r\n<p>Hist&oacute;ricamente se ha invisibilizado el papel que ha tenido la mujer en la econom&iacute;a, esto debido a motivos socio-culturales, correspondientes a un sistema de dominio mucho m&aacute;s antiguo que el capitalismo, el patriarcado. En tal sentido, existen quienes han incursionado en la compleja batalla por dar a conocer cual ha sido el aporte y la vinculaci&oacute;n del g&eacute;nero femenino con las cuestiones econ&oacute;micas;&nbsp; ya sea desde sus aportes te&oacute;ricos o sus aportes pr&aacute;cticos, seg&uacute;n sus per&iacute;odos hist&oacute;ricos. En este caso Iraida nos demuestra c&oacute;mo a trav&eacute;s de factores de opresi&oacute;n y dominaci&oacute;n, se le ha delegado a la mujer el papel biol&oacute;gico de la reproducci&oacute;n y al hombre el de la producci&oacute;n de bienes, cuando en investigaciones sobre el tema arrojan formas de producci&oacute;n femenina de hace aproximadamente<strong> </strong><strong>3000-1000</strong><strong> </strong><strong>a.p.</strong><strong>&rdquo;</strong></p>\r\n\r\n<hr />\r\n<p><strong>VARGAS</strong><strong> </strong><strong>ARENA</strong>, Iraida. <em>Mujeres</em><em> </em><em>como</em><em> </em><em>agentes</em><em> </em><em>productivos.</em><em> </em><em>La</em><em> </em><em>producci&oacute;n</em><em> </em><em>femenina</em><em> </em><em>en</em><em> </em><em>las</em><em> </em><em>sociedades</em><em> </em><em>cazadoras</em><em> </em><em>recolectoras</em> en <strong>Historia,</strong><strong> </strong><strong>mujer,</strong><strong> </strong><strong>mujeres</strong>. Fundaci&oacute;n editorial El Perro y la Rana 2007. Pp- 31.</p>\r\n', '2018-08-21 14:44:44', 4, 1, 'gpuerta', 2),
(5, 'Tips para apoyar a la madre durante los primeros meses de tu hij@', '<p>&iquest;C&oacute;mo distribuimos los cuidados de nuestr@s hijxs recien nacid@s?</p>\r\n\r\n<p>(Paternidad responsable)</p>\r\n\r\n<ul>\r\n	<li>Distrib&uacute;yanse las tareas dom&eacute;sticas, sin embargo, si la madre no puede realizar alguna de sus responsabilidades, real&iacute;zala t&uacute;. Tu hij@ exige atenci&oacute;n permanente de su madre, mucho m&aacute;s cuando est&aacute; recibiendo lactancia materna exclusiva y a libre demanda.</li>\r\n	<li>Procura asistir a todas las consultas pedi&aacute;tricas, investiga sobre el desarrollo de la o el reci&eacute;n nacido en sus primeros meses de vida, no hace falta que te leas todo un libro, existen m&uacute;ltiples aplicaciones para dispositivos m&oacute;viles que peri&oacute;dicamente te dan informaci&oacute;n importante sobre el desarrollo normal tu hij@.</li>\r\n	<li>Ofr&eacute;cete para cuidar a tu hj@ t&uacute; solo durante un par de horas al d&iacute;a, as&iacute; la madre podr&aacute; descansar y dedicarse tiempo a s&iacute; misma, evit&aacute;ndole estr&eacute;s, ella te lo agradecer&aacute; inmensamente</li>\r\n	<li>Se comprensivo, paciente y amoroso en todo momento. Tanto para ti como para la madre el proceso de la paternidad y la maternidad responsables son un poco extenuantes, pero tendr&aacute;n como resultado un mejor desarrollo para tu hij@ y servir&aacute; para que en el futuro el o ella repita la manera m&aacute;s justa de relacionarse.</li>\r\n</ul>\r\n', '2018-08-21 15:10:54', 5, 4, 'gpuerta', 2),
(6, 'Diario de una trans', '<p><strong>P&aacute;g 1: RENACER</strong></p>\r\n\r\n<ul>\r\n	<li>La vida se me ha puesto de rev&eacute;s. En efecto, transitar de un g&eacute;nero a otro es tambi&eacute;n, desafortunadamente, la confirmaci&oacute;n y la existencia del peso de lo binario (blanconegro, duro-blando, hombre-mujer). Ponerse del lado contrario, habitarlo de frente; ahora estoy viendo y viviendo desde la otra acera: nuevos c&oacute;digos, nuevos significados, nuevas expectativas, nuevas consideraciones me atraviesan. Experimento, unas veces con alegr&iacute;a, casi siempre con angustia, lo que conlleva relacionarse desde este lado. Nazco de nuevo, en un mundo donde no hay tiempo para ello porque lo imparable es la norma. Ahora soy un hombre trans de 26 a&ntilde;os. Y en estos momentos de mi vida no tengo nada claro.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Me asusto de m&iacute; mismo. Siento que a&uacute;n mis horizontes &eacute;ticos han sido removidos. La &eacute;tica era algo que antes me preocupaba mucho. Para m&iacute; era importante lo correcto, lo perfecto, lo servil, lo ejemplar y ejemplarizante, ser la perfecci&oacute;n para lxs dem&aacute;s en alg&uacute;n sentido (en realidad, en casi todos los sentidos). Reniego ahora de aquella feminidad castrante. Me decanto por el deseo hacia m&iacute; mismo, el abismo, el miedo, s&iacute;: lo inseguro. He asumido el camino de la disidencia que a su vez, un poco, es rechazar todo aquello. Al dar espacio para lo nuevo damos espacio para el invento, para el error, para el ensayo, para el experimento. Y miren que s&iacute;, que siento que de cada tres pasos que doy, dos son equivocados, para m&iacute; y con los m&iacute;os, y luego tengo que pedir disculpas y adem&aacute;s perdonarme a m&iacute; mismo por el tropiezo. &ldquo;Pero no puede ser distinto, es as&iacute;&rdquo;, me dijo mi psicoanalista. &ldquo;Se te ha vuelto la vida un culo&rdquo;, me dije yo mismo en otro momento.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Un engendro. Soy ahora un engendro: me construyo a m&iacute; mismo como se construye un artefacto minucioso, especial, algo muy de uno, que se ha creado colocando lo m&aacute;s especial de nuestro intelecto, de nuestros sentimientos, de nuestras expectativas con la vida. Una creaci&oacute;n. Sin embargo, por m&aacute;s ganas que se le pongan, puede suceder que al prenderlo el aparato se tire tres y no funcione &oacute;ptimamente o como esper&aacute;bamos. As&iacute; me est&aacute; pasando.</li>\r\n</ul>\r\n\r\n<p>Sin embargo estoy aqu&iacute;, me construyo, me cuestiono. Desgarro tambi&eacute;n, a la vez que lo transito, esa parodia fl&aacute;cida y cruenta del binarismo de g&eacute;nero, hay que ver c&oacute;mo pesan ficciones idiotas sobre cada unx: que un genital determine de manera tan absoluta e incuestionable aquello que debes ser, lo que te debe gustar, c&oacute;mo te debes sentir, hablar y mover, es una locura. Esas son atribuciones culturales, no biol&oacute;gicas. Pero me veo y me digo, con la satisfacci&oacute;n de arrancar rayos de rabia y herir el orgullo de los macho-machitos, que ellos no pueden disfrutarse algo como esto, ni siquiera se les ocurre c&oacute;mo hacerlo, no les parece posible: construir(se) una nueva masculinidad. &ldquo;&iquest;Qu&eacute; es ser masculino?&rdquo; me preguntaba uno, &ldquo;&iquest;Qu&eacute; implica construir una nueva masculinidad?&rdquo;. Vaya poco creativo el carajo. Me resultaba curioso que me hiciera a m&iacute; esa pregunta y no que se la hiciera &eacute;l a s&iacute; mismo, siendo adem&aacute;s un &ldquo;hombre-hombre&rdquo; &ndash;como suelen decir unas compa&ntilde;eras para distinguir entre los hombres con pene y heterosexuales de otros hombres (gays, trans, etc.): s&iacute;, es horrible-.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Me parece que si nos propusi&eacute;ramos sentir y percibir m&aacute;s e intelectualizar menos, escuchar y aprender m&aacute;s para interrumpir, imponer y hablar menos, podr&iacute;an darse algunos pasos hacia esa nueva masculinidad. Basta tan s&oacute;lo con ocupar el espacio pensando tambi&eacute;n en y para &ldquo;el otro&rdquo;.</p>\r\n\r\n<ul>\r\n	<li>En el teatro se habla de eso: un o una int&eacute;rprete debe, ante todo, &ldquo;escuchar&rdquo;, con todo su cuerpo, con toda su mente. Esto implica abrirse a trabajar por y para &ldquo;el otro&rdquo;, dejarse estimular y guiar por el entorno. &ldquo;El otro&rdquo; es todo lo que est&aacute; fuera de m&iacute;: los objetos, el espacio y, por supuesto, mis compa&ntilde;eros y compa&ntilde;eras de trabajo. Si los hombres comenz&aacute;ramos a ocupar el espacio con esa disposici&oacute;n, observando m&aacute;s, dejando espacio para sorprendernos m&aacute;s, quebrando el caj&oacute;n de las certezas y abriendo resquicios dentro de nuestra propia e inmaculada raz&oacute;n de g&eacute;nero para proponernos ser &ldquo;hombres&rdquo; distintos, seguro dar&iacute;amos pasos, aunque sea peque&ntilde;itos, para una nueva masculinidad.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Una compa&ntilde;era me dec&iacute;a que considerar que los &ldquo;hombreshombres&rdquo; tienen alguna responsabilidad en el feminismo es un desgaste, que no hay que pelearlo, que m&aacute;ximo lo que se puede esperar de ellos es que sean aliados. Yo creo que s&iacute; hay que exigir responsabilidad. Y no ante el feminismo, sino ante la vida, ante las mujeres, ante los hijos e hijas que dejan regados y abandonados, ante las ni&ntilde;as, novias y esposas que agreden, que violan, que golpean, que matan. Ante las mujeres que se ven ninguneadas, subestimadas, ignoradas, subvaloradas o vulneradas s&oacute;lo por el hecho de ser mujeres, y que les pasa en todos aquellos lugares donde comparten sitio con nosotros. Yo s&iacute; creo que hay que exigir responsabilidad. Revisarse, des-construirse, re-construirse y corregir no es s&oacute;lo &ndash;y adem&aacute;s- una tarea m&aacute;s para las mujeres. Es un deber de todas y todos como venezolanos para con nuestro entorno, m&aacute;s a&uacute;n si queremos asumirnos, en el discurso y en la pr&aacute;ctica, como seres cr&iacute;ticos y propositivos ante nuestra realidad. Para eso hay herramientas, particularmente en mi experiencia considero que el psicoan&aacute;lisis ha sido una de las m&aacute;s hermosas. El arte tambi&eacute;n, la militancia. Pero de bolas que hay que revisarse, que hay que responsabilizarse. Claro que s&iacute;.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Yo vuelvo a nacer. Me construyo. Me recreo. Experimento el acto de la improvisaci&oacute;n y la creaci&oacute;n como nunca, con mi propia vida. Pero no creo que se tenga que ser un hombre trans para emprender algo como esto. Todos los hombres, -s&iacute; incluso los &ldquo;hombre-hombres&rdquo;- deber&iacute;an hacerlo.</li>\r\n</ul>\r\n', '2018-08-21 15:39:31', 6, 4, 'gpuerta', 2),
(7, 'Â¿Las mujeres han hecho historia?', '<p><strong>Por Inair Manzur</strong></p>\r\n\r\n<p>A lo largo del tiempo, las mujeres como parte de la humanidad se han manifestado en los procesos de construcci&oacute;n, o deconstrucci&oacute;n, con hechos que nos han llevado hasta lo que conocemos hoy en d&iacute;a como el presente. Pero a simple vista en eso que llaman &ldquo;imaginario colectivo&rdquo; parecieran estar inexistentes, como si una pasividad las hubiera tenido dormidas durante todos los diversos procesos hist&oacute;ricos.</p>\r\n\r\n<p>No es un secreto para nadie que si se solicitara a una persona seleccionada al azar, mencionar a una mujer que haya participado en la gesta emancipadora Venezolana, luego de pensarlo dir&iacute;a que Luisa C&aacute;ceres de Arismendi, o Josefa Camejo, tal vez mencione a Juana Ram&iacute;rez &ldquo;La Avanzadora&rdquo;, y por su puesto no olvidar&iacute;a mencionar a la hero&iacute;na de la Patria Grande, Manuela S&aacute;enz, pero si se agrandar un poco la pregunta y se preguntara cual fue el accionar de la mujer que menciona en cuesti&oacute;n, la respuesta se colocar&iacute;a cuesta arriba.</p>\r\n\r\n<p>Cada d&iacute;a parece mas dif&iacute;cil conocer a nuestras antecesoras, cosa que es indispensable porque los referentes en las construcciones paradigm&aacute;ticas siempre van a nutrir nuestras ideas, van a afinar nuestras estrategias e indiscutiblemente van a contribuir en la t&aacute;ctica que accionemos d&iacute;a a d&iacute;a en la lucha por la igualdad y equidad de g&eacute;nero. La participaci&oacute;n decidida, heroica y firme de las mujeres parte del pueblo venezolano no se ha hecho esperar, debido a que hemos sido justamente las principales v&iacute;ctimas de las guerras en las que valientemente en diferentes campos, cumplimos con la tarea hist&oacute;rica de dar continuidad a la vida humana y por ende defenderla de quien intente arrebatarla, luchando constantemente por preservar la tierra que nos vio nacer, luchando cada d&iacute;a por la vida.</p>\r\n\r\n<p>Por lo tanto es bueno recordar llamando a la necesidad de la unidad del movimiento feminista que, las mujeres participamos y participaremos en todos los espacios pol&iacute;ticos, econ&oacute;micos, sociales, porque no queremos retroceder sino defender el legado de l<strong>A</strong><strong>na </strong><strong>Soto</strong>, ind&iacute;gena larense, parte de la legi&oacute;n que combati&oacute; al imperio Espa&ntilde;ol, quienes la ten&iacute;an como sirvienta, pero al escuchar que hab&iacute;an quienes luchaban por a libertad, se escapo a las monta&ntilde;as y desde all&iacute; comenz&oacute; tambi&eacute;n los ataques y combates contra los opresores; esta valerosa mujer, se mantuvo desde 1618, al frente de los ind&iacute;genas perseguidos, humillados, robados, y despojados, defendiendo sus tierras, El Tocuyo, Carora (Barquisimeto), <strong>lleg&oacute; a reunir mas de 2000 guerreros, con los cuales sostuvo victoriosa, durante m&aacute;s de cincuenta a&ntilde;os la bandera de la resistencia anticolonialista (Minmujer.2010), </strong>digna representante de quienes frente a la invasi&oacute;n colonialista espa&ntilde;ola, efectuaron, con fuerza y hero&iacute;smo, los m&aacute;s enconados combates contra la esclavitud y en defensa de sus territorios.</p>\r\n\r\n<p>Muchas mujeres venezolanas convencidas de poder lograr una justa y humana libertad, apostaron por una Rep&uacute;blica, desde diversos escenarios como <strong>Teresa Heredia</strong>, que estuvo involucrada en el movimiento revolucionario Patriota, que <strong>con tan solo 17 a&ntilde;os (&hellip;) costurera de oficio fue descubierta con un arsenal de armas y pertrechos, de guerra que estaban destinados a las tropas Patriotas...(Minmujer.2010), </strong>e intercept&oacute; comunicaciones del enemigo, quien la captura y la humilla pase&aacute;ndola desnuda y emplumada (llena de plumas pegadas en partes del cuerpo con miel) en el pueblo, cosa que no incidi&oacute; en su esp&iacute;ritu de libertad as&iacute;, como el de <strong>Josefa Camejo</strong><strong>, </strong>falconiana, que vivi&oacute; los sucesos del 19 de abril de 1811, y firm&oacute; el 18 de octubre del mismo a&ntilde;o un documento titulado <em>Representaci&oacute;n que hace el Bello Sexo al Gobierno de Barinas </em>que expon&iacute;a lo siguiente <strong>&ldquo;El sexo femenino no teme a los horrores de la guerra, antes bien, el estallido del ca&ntilde;&oacute;n no har&aacute; m&aacute;s que alentar su fuego y encender el deseo de libertad que sostendr&aacute; a toda costa el obsequio del suelo patrio&rdquo;, </strong>expresiones de solidaridad con la causa, con sus compa&ntilde;eros de&nbsp; vida y lucha.</p>\r\n\r\n<p>Esa valent&iacute;a arrolladora y el espaldarazo al pensamiento anticolonialista,&nbsp; antiimperialista que en aquel momento corr&iacute;a como fuerza &aacute;lgida en representaci&oacute;n de la justicia, la verdad y el amor, de la construcci&oacute;n de lo nuevo, nacieron de mujeres creadoras de simbolog&iacute;as y s&iacute;mbolos. Colaborando con su esp&iacute;ritu indoblegable como <strong>Ana Mar&iacute;a Campos</strong><strong>, </strong>zuliana, quien pasa a la historia por su frase <strong>&ldquo;si Morales no capitula, monda, por la que fue delatada, hecha prisionera y azotada...&rdquo;</strong>, convencida de sus ideales y firme con su conciencia por cada l&aacute;tigo que recib&iacute;a, repet&iacute;a la frase, <em>si no capitula monda, si no capitula monda</em>.</p>\r\n\r\n<p>C&oacute;mo no tener en el coraz&oacute;n a esta gran joven y dem&aacute;s mujeres que estuvieron en batallas muchas de ellas, sin consider&aacute;rseles un grado militar, e hicieron escuchar su voz en la gesta independentista como <strong>Juana Ram&iacute;rez </strong><strong>(</strong><strong>La Avanzadora</strong><strong>), </strong>quienes amamos la historia se nos llena el esp&iacute;ritu y la moral el saber de esta monaguense, hija del General Patriota Andr&eacute;s Rojas (persona de confianza de Bol&iacute;var y una esclava negra africana), integrante de la causa libertadora junto a otras mujeres, organizadas, en un batall&oacute;n llamado <em>Bateria de Mujeres, </em>con el que defendieron Matur&iacute;n, auxiliaron a los heridos, trasladaron armas, respaldaron las acciones de los soldados patriotas, velaron por los ni&ntilde;os y ancianos escondidos en su poblaci&oacute;n, manteniendo a raya los ataques imperiales, esta mujer era la primera en avanzar hacia el enemigo; por eso la llamaban <em>La Avanzadora</em><em>, </em>y en medio de un valle de balas, <strong>&ldquo;...se acerc&oacute; al cad&aacute;ver de un general realista ca&iacute;do en combate, tom&oacute; su espada y la levant&oacute;, apuntando al cielo como gesto simb&oacute;lico de la libertad..</strong>.&rdquo;, pero no solo ella, tambi&eacute;n hab&iacute;an otras mujeres que participaban en materia militar, que en plena batalla, como en la <em>de Carabobo </em>combatieron, y como lo ten&iacute;an prohibido, muchas se cortaron el cabello, se vistieron de soldados y participaron, Sim&oacute;n Bol&iacute;var rindi&oacute; honores a un grupo de mujeres, que murieron en Carabobo junto a los soldados del ejercito libertador.</p>\r\n\r\n<p>No podemos olvidar a las camaradas del siglo XX como a nuestra <strong>Livia Gouverneur</strong><strong>, </strong>muchacha de San Agust&iacute;n, conscientemente antiimperialista, quien junto al movimiento estudiantil de los a&ntilde;os 60 jug&oacute; un papel importante contra la intervenci&oacute;n norteamericana integrante de la Unidad T&aacute;ctica de Combate (UTC), altamente comprometida con el proceso de cambio revolucionario.</p>\r\n\r\n<p>El accionar de las mujeres tambi&eacute;n ha sido heroico y constante ante los momentos que se le ha requerido, momentos en que mujeres y hombres combatieron a&nbsp; poderes imperiales, que a&uacute;n hoy pretenden socavar, violar y arremeter contra la soberan&iacute;a de los pueblos, en este caso recordamos a las mujeres, referencias morales de las que debemos tener memoria y claridad, ya que constantemente fueron invisibilizadas por una clase ap&aacute;trida.</p>\r\n\r\n<p>Por tales referencias, el legado de estas mujeres y muchas otras m&aacute;s que faltan por nombrar estamos conscientes de que solo se llega a la victoria frente a una fuerza dominante con la participaci&oacute;n consagrada de la mayor parte de la poblaci&oacute;n, as&iacute;, como estas mujeres mitad de dicha poblaci&oacute;n y madres de la otra mitad, asumieron su papel en diversas tareas (declamadoras, escritoras, activistas, soldados, m&uacute;sicas, anfitrionas, esp&iacute;as, informantes, enfermeras, costureras, profesoras); contra la opresi&oacute;n con firmeza y amor. Las mujeres de ayer, las mujeres de hoy estamos comprometidas a organizarnos por la defensa de ese legado y mas, estamos comprometidas a ser mujeres libertadoras, revolucionarias, combativas y hero&iacute;nas, es decir mujeres antimperialistas, mujeres que hacemos historia.</p>\r\n', '2018-08-21 15:39:41', 7, 4, 'gpuerta', 1),
(8, 'El Diario de una feminista en construcciÃ³n', '<p><strong>Los inicios: sal&iacute; del closet sin dejar de ser heterosexual.</strong></p>\r\n\r\n<p>Hola, soy Suzany y soy la hija menor de una familia que llamamos &ldquo;disfuncional&rdquo; y como tal, siempre fui la ni&ntilde;a consentida por partida doble, gracias a ese peso moral que sienten los padres cuando no cumplen con el ABC del estereotipo de la familia feliz. Tuve una ni&ntilde;ez y una adolescencia sin mayores contratiempos, digo yo, pues si le preguntara a mis padres, probablemente dijeran que sufrieron un castigo divino por no respetar el &ldquo;hasta que la muerte los separe&rdquo;. Las peleas, las fracturas, las heridas suturadas, los chichones, los raspones, las Barbies mutiladas, las &ldquo;jubiladas de clases&rdquo;, las escapadas y las &ldquo;citaciones a los representantes&rdquo; fueron una constante en esa &eacute;poca.</p>\r\n\r\n<p>No me gustaban las mu&ntilde;ecas, ni las cocinas, me gustaban los carros y las pelotas pues me permit&iacute;an jugar al aire libre. No me gustaban los vestidos, ni las medias pantys, de esas espantosas que ten&iacute;an a la cenicienta en el tobillo (a&uacute;n las recuerdos tanto como el calor y la picaz&oacute;n de piernas que me daban), me encantaban los jeans y los zapatos e&rsquo; goma, que me permit&iacute;an correr y jugar con mayor destreza. Nunca entend&iacute; el sentido de tener zarcillos, pues cuando no los botaba, se me infectaban los l&oacute;bulos de las orejas y deb&iacute;a quit&aacute;rmelos por un tiempo y despu&eacute;s de ese sufrimiento, como evidentemente se me cerraban los orificios, deb&iacute;a volver a abr&iacute;rmelos para volver con el mismo ciclo. &iquest;No era m&aacute;s f&aacute;cil quitarlos y ya?.</p>\r\n\r\n<p>Sin dudas fui el dolor de cabeza de mi madre que se autoflagelaba pensando que hab&iacute;a sido su culpa por haberme consentido tanto y lloraba de pensar que su hija era una &ldquo;marimacha&rdquo;. Sin contar que la adolescencia fue peor, pues pas&eacute; a ser entonces, la &ldquo;precoz&rdquo;, la &ldquo;amargada&rdquo;, la &ldquo;rebotada&rdquo;, la &ldquo;contestona&rdquo;, la &ldquo;irreverente&rdquo;, la &ldquo;incontrolable&rdquo;. Luego, a medida que fui adquiriendo mayor nivel de conciencia y fui auto etiquetando mis patrones de conducta, me empec&eacute; a definir en los mismos t&eacute;rminos. Definitivamente yo no entend&iacute;a esta sociedad y ella no me entend&iacute;a a m&iacute;, ten&iacute;amos una relaci&oacute;n enfermiza y violenta.</p>\r\n\r\n<p>Luego, estando en mis 20&rsquo;s en medio del fervor militante propio de la edad, los caminos de la vida me llevaron a cruzarme con un grupo de muchachas activistas feministas con las que gener&eacute; empat&iacute;a de inmediato y como siempre he sido una curiosa por naturaleza y una estudiosa aplicada, me dio por empezar a leer acerca del feminismo y me inscrib&iacute; en un diplomado sobre igualdad y equidad de g&eacute;nero. En apenas d&iacute;as, la cuesti&oacute;n se volvi&oacute; casi enfermiza, mientras m&aacute;s le&iacute;a, estudiaba e investigaba sobre el tema, m&aacute;s me apasionaba y me involucraba.</p>\r\n\r\n<p>Un buen d&iacute;a, estando en clases del diplomado, una de mis profesoras preferidas empez&oacute; a enumerar los adjetivos usados por algunos y algunas para describir a las feministas, en el medio de alienaci&oacute;n producida por esta sociedad patriarcal, y para mi sorpresa, utiliz&oacute; las siguientes palabras: &ldquo;marimachas&rdquo;, &ldquo;amargadas&rdquo;, &ldquo;rebotadas&rdquo;, &ldquo;contestonas&rdquo;, &ldquo;irreverentes&rdquo;, entre otras. Sent&iacute; que recorri&oacute; por mi cuerpo una bocanada de ox&iacute;geno que alivi&oacute; una asfixia soportada por a&ntilde;os; que de repente me quitaron el peso de una cruz que ya se hab&iacute;a incrustado en mi espalda; que por primera vez ve&iacute;a, ol&iacute;a, escuchaba, cantaba&hellip;en fin, ese d&iacute;a volv&iacute; a nacer. Me levant&eacute; y dije orgullosa, as&iacute; como si hubiese descubierto la respuesta de la &uacute;ltima pregunta de &iquest;Qui&eacute;n Quiere ser Millonario?: &ldquo;&iexcl;Claro, ya entiendo, yo siempre fui feminista!&rdquo; y luego de sentarme y suspirar profundamente, disfrutando de ese nuevo oxigeno que recorr&iacute;a mi cuerpo, dije &ldquo;&iexcl;Qu&eacute; alivio! Sal&iacute; de closet! Al fin me descubr&iacute;&rdquo;.</p>\r\n\r\n<p>Luego de haber pasado toda mi vida cuestionando mi nivel de adaptaci&oacute;n social y de haberme adjudicado, desde que tengo uso de raz&oacute;n, una serie de etiquetas negativas por mi actitud contestataria ante esta sociedad que pretend&iacute;a encorvarme y encuadrarme en los estereotipos de g&eacute;nero impuestos a las mujeres, por fin dej&eacute; de juzgarme por lo que creo y soy. Me acept&eacute; e hice de ello una bandera de lucha, una raz&oacute;n de vida. Estoy segura que esta misma sensaci&oacute;n la experimentan las personas sexodiversas que por a&ntilde;os reprimen su ser por el deber y que un d&iacute;a deciden aceptarse y salir del closet. Ese d&iacute;a volv&iacute; a nacer y empez&oacute; mi maravilloso proceso de liberaci&oacute;n, emancipaci&oacute;n y construcci&oacute;n.</p>\r\n\r\n<p><strong>Suzany Gonz&aacute;lez Zambrano</strong></p>\r\n', '2018-08-21 15:39:50', 8, 4, 'gpuerta', 2),
(9, 'Mujeres, sexualidad y poder', '<p><strong><em>Por:Yekuana Martinez</em></strong></p>\r\n\r\n<p><a href=\"mailto:yekuanamartinez@gmail.com\"><strong><em>yekuanamartinez@gmail.com</em></strong></a></p>\r\n\r\n<p><strong><em>instagram y facebook: @yekuanamar</em></strong></p>\r\n\r\n<p><strong><em>twitter: @yekuanamartinez</em></strong></p>\r\n\r\n<p><strong><em>&ldquo;Las verdades no valen por s&iacute; mismas, necesitan un poder que las sostenga&rdquo;</em></strong><em> <strong>Esther D&iacute;az. </strong></em></p>\r\n\r\n<p>En la sexualidad de las mujeres hay intr&iacute;nsecas relaciones de poder, las cuales se sustentan en el patriarcado al cual nos referimos como <em>&ldquo;conjunto de estructuras econ&oacute;micas, ideol&oacute;gicas y sentimentales que fundamentan la dominaci&oacute;n de la mujer y el predominio masculino en la organizaci&oacute;n social&rdquo;.</em></p>\r\n\r\n<p>El Estado, la iglesia y la medicina son alguna de las instituciones que hist&oacute;ricamente construyen y regulan el ejercicio de la sexualidad femenina. Todas han desarrollado discursos sexuales, en algunos casos desde la prohibici&oacute;n, la apuesta al silencio y la condena al placer, en otros casos desde la regulaci&oacute;n, proclamando normas que domestiquen y estandaricen la funci&oacute;n sexual de las y los individuos. Sus escenarios y v&iacute;as de trasmisi&oacute;n son diversos: la casa, la escuela, los medios de comunicaci&oacute;n, la industria cultural capitalista, las nuevas tecnolog&iacute;as, digitales, todas estas instituciones inciden poderosamente en nuestro imaginario y pr&aacute;ctica sexual.</p>\r\n\r\n<p>Uno de los discursos m&aacute;s influyentes acerca de la sexualidad de las mujeres, lo podemos encontrar analizando los escritos b&iacute;blicos ampliamente conocidos en nuestra cultura occidental y su tradici&oacute;n judeo-cristiana.</p>\r\n\r\n<p><strong><em>Mujer, Sexo y Pecado. </em></strong></p>\r\n\r\n<p><strong><em>La iglesia Cat&oacute;lica y su influencia en la construcci&oacute;n de la sexualidad femenina:</em></strong></p>\r\n\r\n<p><em>&ldquo;A la mujer dijo: Multiplicar&eacute; en gran manera los dolores en tus pre&ntilde;eces; con dolor dar&aacute;s a luz los hijo; y tu deseo ser&aacute; para tu marido, y &eacute;l se ense&ntilde;orear&aacute; de ti&rdquo;. </em></p>\r\n\r\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(G&eacute;nesis 3.16).</em></strong></p>\r\n\r\n<p>La participaci&oacute;n de la mujer en el relato b&iacute;blico del pecado original puede explicar la asociaci&oacute;n de sexo y pecado en todo el pensamiento occidental posterior.</p>\r\n\r\n<p>El mito del pecado original: es una de las explicaciones de m&aacute;s peso cultural que podemos encontrar a la hora buscar el origen de los prejuicios en torno a la sexualidad de las mujeres. <em>&ldquo;La primera aventura er&oacute;tica, tal como el mito recoge, consiste en la seducci&oacute;n de Ad&aacute;n por la mujer.</em> <em>&ldquo;La mujer que me diste por compa&ntilde;era me dio de &eacute;l y com&iacute;&rdquo;</em></p>\r\n\r\n<p>Este encuentro descrito en el G&eacute;nesis, nos muestra como la humanidad conoci&oacute; la uni&oacute;n sexual, un episodio cargado de culpa producto de la transgresi&oacute;n del origen divino; la gran responsabilidad atribuida a la mujer en esta f&aacute;bula es de destacar, por ser ella la primera que se deja enga&ntilde;ar por la serpiente, la primera en comer la fruta prohibida.</p>\r\n\r\n<p>A trav&eacute;s del estudio de este relato, podemos entender el binomio culpa-sexualidad femenina. La p&eacute;rdida del para&iacute;so y sus privilegios y el comienzo de una vida llena de dolor, penurias y desgracias, que a&uacute;n permanecen en el mundo seg&uacute;n la biblia, gracias al pecado original.</p>\r\n\r\n<p><em>&ldquo;Y al hombre dijo: Por cuanto obedeciste a la voz de tu mujer, y comiste del &aacute;rbol de que te mand&eacute; diciendo: No comer&aacute;s de &eacute;l; maldita ser&aacute; la tierra por tu causa; con dolor comer&aacute;s de ella todos los d&iacute;as de tu vida&rdquo;. </em>G&eacute;nesis 3.17</p>\r\n\r\n<p><em>&nbsp;&ldquo;Con el sudor de tu rostro comer&aacute;s el pan hasta que vuelvas a la tierra, porque de ella fuiste tomado; pues polvo eres, y al polvo volver&aacute;s&rdquo; </em>G&eacute;nesis 3.19</p>\r\n\r\n<p>La maldici&oacute;n que recae sobre Ad&aacute;n estriba en &eacute;l: <strong><em>&ldquo;trabajaras con el sudor de tu frente&rdquo;. </em></strong>El castigo de Eva ser&aacute;: <strong><em>&ldquo;parir&aacute;s con dolor a tus hijos y buscaras con ardor a tu marido y &eacute;l se ense&ntilde;oreara en ti&rdquo;</em></strong><em>&nbsp;</em>con la aparici&oacute;n de la mujer en el para&iacute;so terrenal queda destruido el mundo fant&aacute;stico del Ed&eacute;n. La aparici&oacute;n de la mujer est&aacute; directamente vinculado en esta f&aacute;bula, al origen del sufrimiento humano, el cual sigue condicionando las actitudes sexuales en Occidente, he aqu&iacute; un n&uacute;cleo central de las tradiciones patriarcales.</p>\r\n\r\n<p>En Occidente muchas culturas y religiones en consecuencia asocian el sexo como algo pecaminoso, sucio y debilitante. Las feministas de la tercera ola (1970), develaron los tab&uacute;es religiosos y mitol&oacute;gicos que convirtieron al sexo de la mujer en algo sucio, feo e inferior al pene. Dicha teor&iacute;a de la inferioridad fue sustentada por la idea de Freud del complejo de castraci&oacute;n. Dussel (2013) en su libro <em>Para una Er&oacute;tica Latinoamericana</em>, describe este fen&oacute;meno de la siguiente manera <em>&ldquo;Lo femenino integra el objeto y la pasividad. La vagina es reconocida ya entonces como albergue del pene&rdquo;. &ldquo;la totalidad mundana, entonces, es constituida desde el ego f&aacute;lico&rdquo;&nbsp;</em>Esta ser&aacute; la idea fuerza que sustentar&aacute; el paradigma de una sexualidad falocentrica.</p>\r\n\r\n<hr />\r\n<p>Historiadora, militante feminista y realizadora audiovisual.</p>\r\n\r\n<p><em>Carosio A., Vargas I. (2010) Feminismo y socialismo, Caracas: Fundaci&oacute;n Editorial el Perro y la Rana.</em></p>\r\n\r\n<p><em>Millett K., Pol&iacute;tica Sexual, pp. 71</em></p>\r\n\r\n<p><em>Ib&iacute;dem</em></p>\r\n\r\n<p><em>Ib&iacute;dem</em></p>\r\n\r\n<p><em>Dussel E. (2013) Para una er&oacute;tica Latinoam&eacute;rica, Caracas: Fundaci&oacute;n Editorial el Perro y la Rana, pp. 35</em></p>\r\n', '2018-08-21 15:51:40', 9, 2, 'gpuerta', 2);
INSERT INTO `articulo` (`id_articulo`, `titulo`, `detalle`, `fecha_creado`, `fk_imagen`, `fk_seccion`, `fk_autor`, `fk_estatus`) VALUES
(10, 'Mujeres, Sexualidad y Estado', '<p><strong><em>Por:Yekuana Martinez</em></strong></p>\r\n\r\n<p><a href=\"mailto:yekuanamartinez@gmail.com\"><strong><em>yekuanamartinez@gmail.com</em></strong></a></p>\r\n\r\n<p><strong><em>instagram y facebook: @yekuanamar</em></strong></p>\r\n\r\n<p><strong><em>twitter: @yekuanamartinez</em></strong></p>\r\n\r\n<p>Otra instituci&oacute;n que produjo y desarroll&oacute; discursos en torno a la sexualidad fue el Estado. Y es que <strong><em>&ldquo;En el coraz&oacute;n del problema econ&oacute;mico y pol&iacute;tico de la poblaci&oacute;n se encuentra el sexo&rdquo;.&nbsp;</em></strong>Para el Estado, desde su surgimiento, el tema de la poblaci&oacute;n ha sido una preocupaci&oacute;n econ&oacute;mica y pol&iacute;tica. Los estados m&aacute;s que ver a los ciudadanos/as en su complejidad y comportamiento, analizan las tasas de natalidad, mortalidad, fecundidad, morbilidad, nupcialidad, variables que conllevan a entrar en temas tales como: regularidad y frecuencia del acto sexual entre los ciudadanos/as, incidencia de las practicas anticonceptivas y c&eacute;libes, en el crecimiento o decrecimiento de la poblaci&oacute;n, incidencia de la forma y organizaci&oacute;n de las relaciones entre hombres y mujeres, entre otros. Todos estos aspectos convierten al Estado en un actor clave en el control y la regulaci&oacute;n de la sexualidad.</p>\r\n\r\n<p>La sexualidad deja de ser a partir del siglo XVIII hasta nuestros d&iacute;as, un asunto privado para convertirse en un terreno de intereses econ&oacute;micos y pol&iacute;ticos de las naciones. Como nos plantea Foucault (2008)<em> &ldquo;se pasa a un discurso en el cual la conducta sexual de la poblaci&oacute;n es tomada como objeto de an&aacute;lisis, y a la vez blanco de intervenci&oacute;n, se pasa de la tesis masivamente poblacionista de la &eacute;poca mercantil a tentativas de regulaci&oacute;n m&aacute;s finas y mejor calculadas, que oscilaran, seg&uacute;n los objetivos y las urgencias hacia una direcci&oacute;n natalista o anti-natalistas. A trav&eacute;s de la econom&iacute;a pol&iacute;tica de la poblaci&oacute;n se forma toda una red de observaciones sobre el sexo&rdquo;</em></p>\r\n\r\n<p>Un siglo antes que Foucault, ya Federico Engels en su obra la Familia, la Propiedad Privada y el Estado, hab&iacute;a desarrollado una explicaci&oacute;n que nos da cuenta de esta relaci&oacute;n entre Estado, sexualidad y modos de producci&oacute;n. Engels develo c&oacute;mo surge la primera divisi&oacute;n del trabajo entre el hombre y la mujer para el cuidado de los hijos y las hijas, otorg&aacute;ndole a este acontecimiento el primer antagonismo de clase y la primera opresi&oacute;n de un sexo sobre el otro. Desde este momento, las mujeres quedaron confinadas al mundo del hogar y la reproducci&oacute;n, aparece el patriarcado y con &eacute;l un nuevo contrato sexual, el cual se afianzara como cultura hegem&oacute;nica estableciendo roles diferenciados para hombres y mujeres en la historia.</p>\r\n\r\n<p>En esta obra encontramos los or&iacute;genes de la familia patriarcal, su relaci&oacute;n con la defensa de la propiedad y subordinaci&oacute;n de la mujer. Engels distingu&iacute;a etapas en la historia de la familia caracterizadas por diversas formas de asociaci&oacute;n sexual: promiscuidad, matrimonio de grupo, familia consangu&iacute;nea y punal&uacute;a, hasta culminar en el patriarcado&nbsp; con la aparici&oacute;n finalmente del matrimonio monog&aacute;mico.</p>\r\n\r\n<p>En el feminismo socialista de principios del siglo XX tambi&eacute;n podemos encontrar posturas y discursos en torno a la sexualidad de las mujeres, la cr&iacute;tica al modelo de familia patriarcal, la visibilizaci&oacute;n de las consecuencias de la divisi&oacute;n sexual del trabajo, forman parte de esta primera etapa el cual se va a profundizar en los a&ntilde;os 60 y 70 del siglo pasado con la reivindicaci&oacute;n del derecho a separar procreaci&oacute;n y placer. Evelyn Reed (1977) describe este momento del feminismo de la siguiente manera: &ldquo;<em>El elemento fundamental que impulsa el movimiento de liberaci&oacute;n de las mujeres, es la reconquista de su autonom&iacute;a&rdquo;</em>, para lograrlo propone: las mujeres deber&aacute;n continuar la batalla por sus derechos como mujeres trabajadoras, as&iacute; como atreverse a criticar severamente la instituci&oacute;n de la familia y el matrimonio que hab&iacute;a sido descrito como natural y eterno en los c&oacute;digos de la moral sexual de la burgues&iacute;a.</p>\r\n\r\n<hr />\r\n<p><em>Militante de la revoluci&oacute;n feminista, historiadora, y realizadora audiovisual.</em></p>\r\n\r\n<p><em>Foucault, M. (2008) Historia de la sexualidad, la voluntad del saber. Argentina: Editores Siglo XXI, pp. 28.</em></p>\r\n\r\n<p><em>Ib&iacute;dem, pp. 29</em></p>\r\n\r\n<p><em>Reed, E., (1977) Sexo contra Sexo o clase contra clase. Editorial Fontamara: Espa&ntilde;a.</em> pp. 158.</p>\r\n', '2018-08-21 15:54:33', 10, 2, 'gpuerta', 2),
(11, 'La Sexualidad de las mujeres un territorio a descolonizar  (I Parte)', '<p><strong><em>Por:Yekuana Martinez</em></strong></p>\r\n\r\n<p><a href=\"mailto:yekuanamartinez@gmail.com\"><strong><em>yekuanamartinez@gmail.com</em></strong></a></p>\r\n\r\n<p><strong><em>instagram y facebook: @yekuanamar</em></strong></p>\r\n\r\n<p><strong><em>twitter: @yekuanamartinez</em></strong></p>\r\n\r\n<p>Acercarnos al estudio de la sexualidad y sus relaciones de poder desde una perspectiva feminista nos conduce a entender de manera m&aacute;s clara la relaci&oacute;n entre los sexos a lo largo de la historia. La lucha por la descolonizaci&oacute;n del cuerpo de las mujeres ha sido parte esencial de las demandas del feminismo socialista y anarquista del siglo XIX, XX y XXI. Las feministas tempranamente interpretaron que no bastaba luchar por la igualdad pol&iacute;tica y econ&oacute;mica de las mujeres, si no que era necesario construir un nuevo contrato sexual que superara al patriarcado y sus instituciones.</p>\r\n\r\n<p>La teor&iacute;a feminista tuvo la certeza de develar, como la sexualidad no es, como por mucho tiempo cre&iacute;mos, un asunto privado, sino un asunto pol&iacute;tico. La sexualidad pertenece al mundo pol&iacute;tico precisamente porque en ella est&aacute;n presentes relaciones de poder, relaciones no igualitarias, marcadas por reglas y normas sociales que han implicado una subordinaci&oacute;n de las mujeres durante milenios.</p>\r\n\r\n<p>Importantes conquistas fueron alcanzadas durante el siglo XX en el campo de la sexualidad de las mujeres: la p&iacute;ldora anticonceptiva y la promulgaci&oacute;n de los derechos sexuales y reproductivos como derechos humanos, son algunas de ellas. Sin embargo el peso cultural del patriarcado en nuestras sociedades latinoamericanas, incide de manera transcendental en su cumplimiento. La concepci&oacute;n y formas tradicionales de abordar el tema de la sexualidad han contribuido al conjunto de factores sociales, econ&oacute;micos y pol&iacute;ticos que permiten la propagaci&oacute;n de graves problemas sociales, uno de los m&aacute;s graves en nuestro contexto: el embarazo temprano. En este sentido develar los mitos en torno a la sexualidad femenina, descolonizar este territorio, sigue constituyendo un desaf&iacute;o, para la praxis feminista.</p>\r\n\r\n<p><strong><em>Acerc&aacute;ndonos al concepto de Sexualidad</em></strong></p>\r\n\r\n<p><em>&ldquo;El g&eacute;nero es la organizaci&oacute;n social de las relaciones entre los sexos que incluyen relaciones de poder, y, sobre todo, el g&eacute;nero es la forma primaria de significaci&oacute;n de las relaciones de poder&rdquo;</em></p>\r\n\r\n<p><strong><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Johan Scott </em></strong></p>\r\n\r\n<p>La sexualidad es un concepto de la modernidad. Antes hab&iacute;a <strong><em>carne</em></strong>, en el sentido cristiano de carne. Y antes a&uacute;n, <strong><em>aphrodisia</em></strong> o problematizaci&oacute;n del uso de los placeres, tal como lo entend&iacute;an los pueblos paganos. Al hablar de sexualidad nos referimos a la organizaci&oacute;n de nuestros deseos y su influencia en nuestra identidad, comportamiento y emociones. La sexualidad es un concepto que trasciende el hecho biol&oacute;gico de que somos seres sexuados desde el nacimiento, es una construcci&oacute;n socio- hist&oacute;rica donde intervienen aspectos psicol&oacute;gicos, sociales, anat&oacute;micos-fisiol&oacute;gicos, emocionales, afectivos y conductuales que se van configurando mediante el proceso de socializaci&oacute;n.</p>\r\n\r\n<p>Este proceso de socializaci&oacute;n lo defini&oacute; el psic&oacute;logo latinoamericano Ignacio Martin- Bar&oacute;, como: procesos psicosociales en que el o la individuo se desarrolla hist&oacute;ricamente como persona y actor/actriz social. Esta definici&oacute;n sostiene tres afirmaciones esenciales: (1) la socializaci&oacute;n es un proceso de desarrollo hist&oacute;rico; (2) es un proceso de desarrollo de la identidad personal; (3) es un proceso de desarrollo de la identidad social.<em>&nbsp;</em>En este proceso de socializaci&oacute;n construimos nuestra identidad de g&eacute;nero, influenciadas por la relaci&oacute;n de desigualdad e inequidad que ha existido entre los sexos desde la divisi&oacute;n sexual del trabajo.</p>\r\n\r\n<hr />\r\n<p>Historiadora, militante feminista y realizadora audiovisual.</p>\r\n\r\n<p><em>Baro, M. (1990) Acci&oacute;n e Ideolog&iacute;a. Psicolog&iacute;a social desde Centroam&eacute;rica.&nbsp; San Salvador: UCA,. pp. 102.</em></p>\r\n', '2018-08-21 15:56:49', 11, 2, 'gpuerta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audiovisual`
--

CREATE TABLE `audiovisual` (
  `id_audiovisual` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `ruta` varchar(10000) NOT NULL,
  `fk_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `audiovisual`
--

INSERT INTO `audiovisual` (`id_audiovisual`, `titulo`, `referencia`, `ruta`, `fk_categoria`) VALUES
(1, 'Diana de Gales-Documental', 'A 30 aÃ±os de su partida', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5zJXlzl5mS8\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `id_libro` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `autor` varchar(60) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `url` varchar(10000) NOT NULL,
  `imagen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`id_libro`, `titulo`, `autor`, `fk_categoria`, `url`, `imagen`) VALUES
(1, 'Las Mariposas', 'Germaine Puerta', 3, 'https://github.com/gpuerta', '../../images/biblioteca/farn.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'Social'),
(2, 'Político'),
(3, 'Cultural'),
(4, 'Autoayuda'),
(5, 'Biográfica'),
(6, 'Investigación'),
(7, 'Hogar'),
(8, 'Enciclopedia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_articulo`
--

CREATE TABLE `estatus_articulo` (
  `id_estatus_articulo` int(11) NOT NULL,
  `estatus_articulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus_articulo`
--

INSERT INTO `estatus_articulo` (`id_estatus_articulo`, `estatus_articulo`) VALUES
(1, 'Privado'),
(2, 'Publicado'),
(3, 'Principal\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_usuario`
--

CREATE TABLE `estatus_usuario` (
  `id_estatus_usuario` int(11) NOT NULL,
  `estatus_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estatus_usuario`
--

INSERT INTO `estatus_usuario` (`id_estatus_usuario`, `estatus_usuario`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hero`
--

CREATE TABLE `hero` (
  `id_hero` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `detalle` mediumtext NOT NULL,
  `fecha_creado` datetime NOT NULL,
  `fk_imagen` int(11) NOT NULL,
  `fk_seccion` int(11) NOT NULL,
  `fk_autor` int(11) NOT NULL,
  `fk_estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen_articulo`
--

CREATE TABLE `imagen_articulo` (
  `id_imagen_articulo` int(11) NOT NULL,
  `referencia` varchar(500) NOT NULL,
  `ruta` varchar(10000) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen_articulo`
--

INSERT INTO `imagen_articulo` (`id_imagen_articulo`, `referencia`, `ruta`, `nombre_imagen`) VALUES
(1, 'Las sufragistas', '../../../images/articulo/tribu_urquia/voto mexico.jpg', 'voto mexico.jpg'),
(3, 'Las sufragistas', '../../../images/articulo/tribu_urquia/voto mexico.jpg', 'voto mexico.jpg'),
(4, 'Mujeres en el tiempo', '../../../images/articulo/tribu_urquia/mujeres-en-tiempos-de-cambio-1-638.jpg', 'mujeres-en-tiempos-de-cambio-1-638.jpg'),
(5, 'Handas', '../../../images/articulo/tribu_urquia/handas.jpg', 'handas.jpg'),
(6, 'Transgenero', '../../../images/articulo/tribu_urquia/transgenero.jpg', 'transgenero.jpg'),
(7, 'Juana Rramirez', '../../../images/articulo/tribu_urquia/juanaramirez.jpg', 'juanaramirez.jpg'),
(8, 'feminismo en construccion', '../../../images/articulo/tribu_urquia/feminismo en construccion.jpg', 'feminismo en construccion.jpg'),
(9, 'Mujer', '../../../images/articulo/tribu_urquia/mujer.jpg', 'mujer.jpg'),
(10, 'Mujer 2', '../../../images/articulo/tribu_urquia/Articulo 3 imagen.jpg', 'Articulo 3 imagen.jpg'),
(11, 'Mujer 3', '../../../images/articulo/tribu_urquia/Captura de pantalla 2018-02-28 a las 1.00.56 p.m..png', 'Captura de pantalla 2018-02-28 a las 1.00.56 p.m..png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombres`, `cedula`, `correo`, `telefono`, `fk_usuario`, `fk_tipo_usuario`) VALUES
(1, 'Quinta Ola', '00000000', 'admin@hotmail.com', '00000000', 1, 1),
(2, 'Quinta Ola', '00000001', 'estandar@hotmail.com', '000000000', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `pregunta`) VALUES
(1, 'Nombre de mascota'),
(2, 'Comida favorita'),
(3, 'País que quisiera conocer'),
(4, 'Color favorito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectate`
--

CREATE TABLE `proyectate` (
  `id_proyectate` int(11) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `articulo` varchar(500) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `contacto` varchar(500) NOT NULL,
  `ruta` varchar(500) NOT NULL,
  `img` varchar(500) NOT NULL,
  `fecha_creado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` int(11) NOT NULL,
  `seccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `seccion`) VALUES
(1, 'La Tribu de Urquía'),
(2, 'Ultravioleta'),
(3, 'Proyectate'),
(4, 'Opinión Feminista'),
(5, 'Nosotras en el mundo'),
(6, 'Ni una menos\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'estandar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `clave` varchar(10000) NOT NULL,
  `imagen_perfil` varchar(500) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL,
  `fk_pregunta` varchar(500) NOT NULL,
  `respuesta` varchar(500) NOT NULL,
  `fk_estatus_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `imagen_perfil`, `nombre_imagen`, `fk_pregunta`, `respuesta`, `fk_estatus_usuario`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '../../images/perfil/admin.png', 'admin.png', '1', 'anubis', 1),
(2, 'estandar', '202cb962ac59075b964b07152d234b70', '../../images/perfil/face3.jpg', 'face3.jpg', '1', 'anubis', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `audiovisual`
--
ALTER TABLE `audiovisual`
  ADD PRIMARY KEY (`id_audiovisual`);

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`id_libro`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `estatus_articulo`
--
ALTER TABLE `estatus_articulo`
  ADD PRIMARY KEY (`id_estatus_articulo`);

--
-- Indices de la tabla `estatus_usuario`
--
ALTER TABLE `estatus_usuario`
  ADD PRIMARY KEY (`id_estatus_usuario`);

--
-- Indices de la tabla `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id_hero`);

--
-- Indices de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  ADD PRIMARY KEY (`id_imagen_articulo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `proyectate`
--
ALTER TABLE `proyectate`
  ADD PRIMARY KEY (`id_proyectate`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `audiovisual`
--
ALTER TABLE `audiovisual`
  MODIFY `id_audiovisual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estatus_articulo`
--
ALTER TABLE `estatus_articulo`
  MODIFY `id_estatus_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estatus_usuario`
--
ALTER TABLE `estatus_usuario`
  MODIFY `id_estatus_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hero`
--
ALTER TABLE `hero`
  MODIFY `id_hero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagen_articulo`
--
ALTER TABLE `imagen_articulo`
  MODIFY `id_imagen_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proyectate`
--
ALTER TABLE `proyectate`
  MODIFY `id_proyectate` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
