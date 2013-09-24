insert into users (username, nombre, aPaterno, aMaterno, password, user_type) 
	select nomina as username, nombre, aPaterno, aMaterno, clave as password, 'dct' from tutores

insert into users (username, nombre, aPaterno, aMaterno, password, user_type) 
	select numControl as username, nombre, aPaterno, aMaterno, clave as password, 'std' from tutorados

insert into users (username, nombre, aPaterno, aMaterno, password, user_type, created_at, updated_at) 
	select nomina as username, nombre, aPaterno, aMaterno, clave as password, 'dct', NOW(), NOW() from axhunico_tutorias.tutores

insert into users (username, nombre, aPaterno, aMaterno, password, user_type, created_at, updated_at) 
	select numControl as username, nombre, aPaterno, aMaterno, clave as password, 'std', NOW(), NOW() from axhunico_tutorias.tutorados