<?php


class Conexao{

	public $pdo;
	
	public function __construct(){
			try{
				$pdo= new PDO("mysql:dbname=crud-pdo;host=localhost", "root", "");
				$this->pdo = $pdo;

			}catch(PDOException $e){
				 echo "Falha na Conexão";

            }
        }

        public function inserirInscricao($primeiro_nome,$ultimo_nome,$genero,$curso,$periodo){
			$inserir = "INSERT INTO  inscricao (primeiro_nome,ultimo_nome,genero,curso,periodo) VALUES (:primeiro_nome,:ultimo_nome,:genero,:curso,:periodo)";
			$consulta = $this->pdo->prepare($inserir);
			$consulta->bindValue(':primeiro_nome', $primeiro_nome);
			$consulta->bindValue(':ultimo_nome', $ultimo_nome);
			$consulta->bindValue(':genero', $genero);
			$consulta->bindValue(':curso', $curso);
			$consulta->bindValue(':periodo', $periodo);
			$consulta->execute();
			
			  return true;		
		}
		public function candidatosInscritos(){
			$inscritos = "SELECT * FROM inscricao order by primeiro_nome asc";
			$consulta = $this->pdo->prepare($inscritos);
			$consulta->execute();
			if($consulta->rowCount() > 0){
				return $consulta->fetchAll(PDO::FETCH_ASSOC);
			}
		}
		public function selecionarInscritoPorId($id){

			$selecaoPorId = "SELECT * FROM inscricao WHERE id = :id";
			$consulta = $this->pdo->prepare($selecaoPorId);
			$consulta->bindValue(":id", $id);
			$consulta->execute();

			if ($consulta->rowCount() > 0) {
				return $consulta->fetch(PDO::FETCH_ASSOC);
			}
		}
		public function editarInscritoPorId($primeiro_nome,$ultimo_nome,$genero,$curso,$periodo, $id){
			$editar = "UPDATE inscricao SET primeiro_nome = :primeiro_nome,ultimo_nome =:ultimo_nome, genero =:genero, curso =:curso, periodo =:periodo WHERE id = :id";
			$consulta = $this->pdo->prepare($editar);
			$consulta->bindValue(':primeiro_nome',$primeiro_nome);
			$consulta->bindValue(':ultimo_nome',$ultimo_nome);
			$consulta->bindValue(':genero',$genero);
			$consulta->bindValue(':curso',$curso);
			$consulta->bindValue(':periodo',$periodo);
            $consulta->bindValue(':id', $id);
            $consulta->execute();

           return true;
	}
	public function excluirInscrito($id){
		$excluir = "DELETE  FROM inscricao WHERE id = :id";
		$consulta = $this->pdo->prepare($excluir);
		$consulta->bindValue(":id", $id);
		$consulta->execute();
		return true;
	}
	
	}
$convite = new Conexao();	
?>