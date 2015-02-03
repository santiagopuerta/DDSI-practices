DELIMITER @

CREATE TRIGGER `ActualizaFechaAntiguedad` BEFORE INSERT ON `Empleado`
FOR EACH ROW

begin

set Empleado.antiguedad=Empleado.fechaInicioContrato;

end;

@
DELIMITER;
