--2 apellidopaterno, 1 apellidomaterno, 1 nombre, 2 año, 2 mes, 2 dia, 3 azar

CREATE FUNCTION RFC (nombre text, apellidopat text, apellidomat text, fecha date) RETURNS varchar AS
$$
DECLARE
	ap_paterno text;
	ap_materno text;
	nombreee text;
	dia text;
	mes text;
	anio text;
	cadena_alea text := 'acfohntksj';
	random_1 int; 
	random_2 int;
	random_letra int;
	RFC varchar (13);
BEGIN
	ap_paterno := SUBSTRING (apellidopat FROM 1 FOR 2);
	ap_materno := SUBSTRING (apellidomat FROM 1 FOR 1);
	nombreee := SUBSTRING (nombre FROM 1 FOR 1);
	anio := SUBSTRING ((DATE_PART ('year', fecha)::text) FROM 3 FOR 2); 
	dia := DATE_PART ('day', fecha);
	IF (dia::int < 10)THEN
		dia := 0 || dia;
	END IF;
	mes := DATE_PART ('month', fecha);
	IF (mes::int < 10)THEN
		mes := 0 || mes;
	END IF;
	random_1 := ((RANDOM()*9))::int;
	random_2 := ((RANDOM()*9))::int;
	random_letra := ((RANDOM()*9))::int;
	RFC := UPPER (ap_paterno || ap_materno || nombreee || anio || mes || dia || random_1 || SUBSTRING (cadena_alea FROM random_letra FOR 1) || random_2);
	RETURN RFC;
END;
$$
language plpgsql;

--2 apellidopaterno, 1 apellidomaterno, 1 nombre, 2 año, 2 mes, 2 dia, 3 azar


SELECT rfc('nombre','apellpatern','apellmatern','año-mes-dia')


SELECT rfc('manuel','posada','bolio','1990-04-12')



DROP FUNCTION RFC (text, text,text,date)


, al.apellido_paterno
FROM alumno al
WHERE apellido_paterno='Cabeza';