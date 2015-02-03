DELIMITER @

CREATE TRIGGER `disparador` BEFORE INSERT ON `vendeA`
FOR EACH ROW

begin

set vendeA.cantidad=0 where select cantidad, idProducto from Gestiona < vendeA.cantidad;

end;

@
DELIMITER;
