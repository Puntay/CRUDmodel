<?php
	class TrabajadorDAO {

		public function __construct() {
		}

		public function listarTrabajador() {
			try {
					$sql = "SELECT id, nom_trab, ape_trab, fec_ini, sueldo FROM trabajador";

					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->execute();

					if ($stmt->rowCount() > 0) { 
						while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
							$trabajadorVO = new TrabajadorVO();
							$trabajadorVO->set_id( $row['id'] );
							$trabajadorVO->set_nom_trab( $row['nom_trab'] );
							$trabajadorVO->set_ape_trab( $row['ape_trab'] );
							$trabajadorVO->set_fec_ini( $row['fec_ini'] );
							$trabajadorVO->set_sueldo( $row['sueldo'] );
							$trabajador[] = $trabajadorVO;
						}
					} else { 
						$trabajador = NULL;
					}

					return $trabajador;
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: LISTAR TRABAJADORES');
				}
		}



//*****************


		public function buscar($usuario) {
			try {
					$sql = "SELECT usuario FROM sc_usuario WHERE usuario = :usuario limit 1";

					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam('usuario', $usuario, PDO::PARAM_STR);
					$stmt->execute();

					$row = $stmt->fetch(PDO::FETCH_ASSOC);

					$registroVO = new UsuarioVO();
					$registroVO->set_usuario( $row['usuario'] );
					
					// Si quieres más campos usas el setter correspondiente

					return $registroVO;
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: BUSCAR->USUARIO');
				}
		}

		public function insertar($usuario, $privilegio) {
			try {
					$sql = "INSERT INTO sc_usuario	(usuario, clave, privilegio, estado)
							VALUES 					(:usuario, :clave, :privilegio, :estado)";

					$clave = $usuario.date("Y");
					$claveHash=password_hash($clave, PASSWORD_DEFAULT);
					$estado = 1; // Por ser nuevo es 1=Activo

					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
					$stmt->bindParam(':clave', $claveHash, PDO::PARAM_STR);
					$stmt->bindParam(':privilegio', $privilegio, PDO::PARAM_INT);
					$stmt->bindParam(':estado', $estado, PDO::PARAM_INT);
					$stmt->execute();
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: INSERTAR->USUARIO');
				}
		}

		public function __destruct() {
		}
	}
?>