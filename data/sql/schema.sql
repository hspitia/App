CREATE TABLE asistencia (fecha DATETIME, asistio TINYINT(1) NOT NULL, estudiante_id INT, cursoprogramado_id INT, cursoprogramado_curso_id INT, cursoprogramado_institucion_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_Asistencia_Estudiante1_idx (estudiante_id), INDEX fk_Asistencia_CursoProgramado1_idx (cursoprogramado_id, cursoprogramado_curso_id, cursoprogramado_institucion_id), PRIMARY KEY(fecha, estudiante_id, cursoprogramado_id, cursoprogramado_curso_id, cursoprogramado_institucion_id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE calendario (id INT AUTO_INCREMENT, nombre VARCHAR(10) NOT NULL, descripcion VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX calendario_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE curso (id INT AUTO_INCREMENT, nombre VARCHAR(128), nombre_corto VARCHAR(60), descripcion VARCHAR(255), servicio_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), INDEX fk_Curso_Servicio1_idx (servicio_id), UNIQUE INDEX curso_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE curso_programado (grado INT NOT NULL, descripcion VARCHAR(128) NOT NULL, fecha_inicio DATE, fecha_finalizacion DATE, curso_id INT, institucion_id INT, periodoacademico_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_CursoProgramado_Curso1_idx (curso_id), INDEX fk_CursoProgramado_Institucion1_idx (institucion_id), INDEX fk_CursoProgramado_PeriodoAcademico1_idx (periodoacademico_id), PRIMARY KEY(curso_id, institucion_id, periodoacademico_id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE estudiante (id INT AUTO_INCREMENT, apellidos VARCHAR(128) NOT NULL, nombres VARCHAR(128) NOT NULL, numero_documento VARCHAR(45) NOT NULL, direccion_1 VARCHAR(128) NOT NULL, direccion_2 VARCHAR(128), acudiente VARCHAR(128) NOT NULL, telefono VARCHAR(20) NOT NULL, movil VARCHAR(20), email VARCHAR(128) NOT NULL, municipio_id INT NOT NULL, genero_id INT NOT NULL, institucion_id INT NOT NULL, tipodocumento_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), INDEX fk_Estudiante_Municipio1_idx (municipio_id), INDEX fk_Estudiante_Genero1_idx (genero_id), INDEX fk_Estudiante_Institucion1_idx (institucion_id), INDEX fk_Estudiante_TipoDocumento1_idx (tipodocumento_id), UNIQUE INDEX estudiante_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE genero (id INT AUTO_INCREMENT, nombre VARCHAR(45) NOT NULL UNIQUE, abreviacion VARCHAR(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX genero_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE institucion (id INT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL UNIQUE, nombre_corto VARCHAR(60) NOT NULL, direccion_1 VARCHAR(80) NOT NULL, direccion_2 VARCHAR(80), telefono_1 VARCHAR(20) NOT NULL, telefono_2 VARCHAR(45), fax VARCHAR(20), email VARCHAR(128) NOT NULL, web VARCHAR(128), tipoinstitucion_id INT NOT NULL, municipio_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), INDEX fk_Institucion_TipoInstitucion1_idx (tipoinstitucion_id), INDEX fk_Institucion_Municipio1_idx (municipio_id), UNIQUE INDEX institucion_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE matricula (fecha DATE, cursoprogramado_curso_id INT, cursoprogramado_institucion_id INT, cursoprogramado_periodoacademico_id INT, estudiante_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_Matricula_CursoProgramado1_idx (cursoprogramado_curso_id, cursoprogramado_institucion_id, cursoprogramado_periodoacademico_id), INDEX fk_Matricula_Estudiante1_idx (estudiante_id), PRIMARY KEY(cursoprogramado_curso_id, cursoprogramado_institucion_id, cursoprogramado_periodoacademico_id, estudiante_id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE municipio (id INT AUTO_INCREMENT, codigo INT UNIQUE NOT NULL, nombre VARCHAR(60) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX municipio_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE perfil (id INT AUTO_INCREMENT, nombre VARCHAR(60) NOT NULL UNIQUE, descripcion VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX perfil_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE periodo_academico (id INT AUTO_INCREMENT, codigo VARCHAR(15) NOT NULL UNIQUE, inicio DATE, fin DATE, activo TINYINT(1), comentarios VARCHAR(255), calendario_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_PeriodoAcademico_Calendario1_idx (calendario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE servicio (id INT AUTO_INCREMENT, nombre VARCHAR(128) NOT NULL, descripcion VARCHAR(255) NOT NULL, valor DECIMAL(7, 2) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX servicio_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE tipo_documento (id INT AUTO_INCREMENT, nombre VARCHAR(6), descripcion VARCHAR(60), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX tipo_documento_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE tipo_institucion (id INT AUTO_INCREMENT, nombre VARCHAR(45) NOT NULL, descripcion VARCHAR(128) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX tipo_institucion_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
CREATE TABLE usuario (id INT AUTO_INCREMENT, apellidos VARCHAR(128) NOT NULL, nombres VARCHAR(128) NOT NULL, telefono VARCHAR(20) NOT NULL, movil VARCHAR(20), email VARCHAR(128) NOT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(20) NOT NULL, perfil_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), INDEX fk_Usuario_Perfil1_idx (perfil_id), UNIQUE INDEX usuario_sluggable_idx (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ENGINE = InnoDB;
ALTER TABLE asistencia ADD CONSTRAINT asistencia_estudiante_id_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE asistencia ADD CONSTRAINT asistencia_cursoprogramado_curso_id_curso_programado_curso_id FOREIGN KEY (cursoprogramado_curso_id) REFERENCES curso_programado(curso_id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE curso ADD CONSTRAINT curso_servicio_id_servicio_id FOREIGN KEY (servicio_id) REFERENCES servicio(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE curso_programado ADD CONSTRAINT curso_programado_periodoacademico_id_periodo_academico_id FOREIGN KEY (periodoacademico_id) REFERENCES periodo_academico(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE curso_programado ADD CONSTRAINT curso_programado_institucion_id_institucion_id FOREIGN KEY (institucion_id) REFERENCES institucion(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE curso_programado ADD CONSTRAINT curso_programado_curso_id_matricula_cursoprogramado_curso_id FOREIGN KEY (curso_id) REFERENCES matricula(cursoprogramado_curso_id);
ALTER TABLE curso_programado ADD CONSTRAINT curso_programado_curso_id_curso_id FOREIGN KEY (curso_id) REFERENCES curso(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE curso_programado ADD CONSTRAINT curso_programado_curso_id_asistencia_cursoprogramado_curso_id FOREIGN KEY (curso_id) REFERENCES asistencia(cursoprogramado_curso_id);
ALTER TABLE estudiante ADD CONSTRAINT estudiante_tipodocumento_id_tipo_documento_id FOREIGN KEY (tipodocumento_id) REFERENCES tipo_documento(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE estudiante ADD CONSTRAINT estudiante_municipio_id_municipio_id FOREIGN KEY (municipio_id) REFERENCES municipio(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE estudiante ADD CONSTRAINT estudiante_institucion_id_institucion_id FOREIGN KEY (institucion_id) REFERENCES institucion(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE estudiante ADD CONSTRAINT estudiante_genero_id_genero_id FOREIGN KEY (genero_id) REFERENCES genero(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE institucion ADD CONSTRAINT institucion_tipoinstitucion_id_tipo_institucion_id FOREIGN KEY (tipoinstitucion_id) REFERENCES tipo_institucion(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE institucion ADD CONSTRAINT institucion_municipio_id_municipio_id FOREIGN KEY (municipio_id) REFERENCES municipio(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE matricula ADD CONSTRAINT matricula_estudiante_id_estudiante_id FOREIGN KEY (estudiante_id) REFERENCES estudiante(id);
ALTER TABLE matricula ADD CONSTRAINT matricula_cursoprogramado_curso_id_curso_programado_curso_id FOREIGN KEY (cursoprogramado_curso_id) REFERENCES curso_programado(curso_id);
ALTER TABLE periodo_academico ADD CONSTRAINT periodo_academico_calendario_id_calendario_id FOREIGN KEY (calendario_id) REFERENCES calendario(id) ON UPDATE CASCADE ON DELETE CASCADE;
ALTER TABLE usuario ADD CONSTRAINT usuario_perfil_id_perfil_id FOREIGN KEY (perfil_id) REFERENCES perfil(id) ON UPDATE CASCADE ON DELETE CASCADE;
