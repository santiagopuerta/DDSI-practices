DELIMITER @


CREATE TRIGGER `disparador_estado` BEFORE INSERT ON `resgistrarIncidencia`
FOR EACH ROW 
begin

	SET registrarIncidencia.estado = `pendiente`;

end;

@
DELIMITER;
