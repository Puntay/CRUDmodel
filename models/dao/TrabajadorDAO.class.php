<?php
	class TrabajadorDAO {

		public function __construct() {
		}

		public function listar() {
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

		public function insertar($trabajadorVO) {
			try {
				
					$sql = "INSERT INTO trabajador (nom_trab, ape_trab, fec_ini, sueldo)
							VALUES (:nom_trab, :ape_trab, :fec_ini, :sueldo)";

					$nom = $trabajadorVO->get_nom_trab();
					$ape = $trabajadorVO->get_ape_trab();
					$fec = $trabajadorVO->get_fec_ini();
					$sue = $trabajadorVO->get_sueldo();
					
					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam(':nom_trab', $nom, PDO::PARAM_STR);
					$stmt->bindParam(':ape_trab', $ape, PDO::PARAM_STR);
					$stmt->bindParam(':fec_ini', $fec, PDO::PARAM_STR);
					$stmt->bindParam(':sueldo', $sue, PDO::PARAM_INT);
					$stmt->execute();
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: INSERTAR');
				}
		}

		public function eliminar($trabajadorVO) {
			try {

					$sql = "DELETE FROM trabajador WHERE id = :id";

					$id = $trabajadorVO->get_id();

					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam(':id', $id, PDO::PARAM_INT);
					$stmt->execute();
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: ELIMINAR');
				}
		}

		public function buscar($trabajadorVO) {
			try {
					$sql = "SELECT id, nom_trab, ape_trab, sueldo FROM trabajador 
							WHERE id = :id limit 1";
					
					$id = $trabajadorVO->get_id();

					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam(':id', $id, PDO::PARAM_INT);
					$stmt->execute();

					$row = $stmt->fetch(PDO::FETCH_ASSOC);

					$trabajadorVO = new TrabajadorVO();
					$trabajadorVO->set_id( $row['id'] );
					$trabajadorVO->set_nom_trab( $row['nom_trab'] );
					$trabajadorVO->set_ape_trab( $row['ape_trab'] );
					$trabajadorVO->set_sueldo( $row['sueldo'] );
					$trabajador = $trabajadorVO;
					return $trabajador;
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: BUSCAR');
				}
		}

		//** Actualizar
		public function actualizar($trabajadorVO) {
			try {
				
					$sql = "UPDATE trabajador
							SET		nom_trab = :nom,
									ape_trab = :ape,
									sueldo   = :sue
							WHERE 	id = :id";

					$id = $trabajadorVO->get_id();
					$nom = $trabajadorVO->get_nom_trab();
					$ape = $trabajadorVO->get_ape_trab();
					$sue = $trabajadorVO->get_sueldo();
					
					$bd = new ConexionDB();
					$stmt = $bd->prepare($sql);
					$stmt->bindParam(':id', $id, PDO::PARAM_STR);
					$stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
					$stmt->bindParam(':ape', $ape, PDO::PARAM_STR);
					$stmt->bindParam(':sue', $sue, PDO::PARAM_INT);
					$stmt->execute();
				
				} catch (Exception $e) {
					die ('No se puede ejecutar la consulta: ACTUALIZAR');
				}
		}

		public function __destruct() {
		}
	}
?>