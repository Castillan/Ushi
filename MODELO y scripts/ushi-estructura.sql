SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ushi
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ushi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `ushi` ;

-- -----------------------------------------------------
-- Table `ushi`.`Persona`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Persona` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Persona` (
  `idPersona` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Cedula` INT NULL,
  `FechaNacimiento` DATE NULL,
  `Direccion` VARCHAR(45) NULL,
  `Telefono` INT NULL,
  `Celular` INT NULL,
  PRIMARY KEY (`idPersona`),
  UNIQUE INDEX `Cedula_UNIQUE` (`Cedula` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Dependencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Dependencia` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Dependencia` (
  `idDependencia` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDependencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Edo_Civil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Edo_Civil` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Edo_Civil` (
  `idEdo_Civil` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEdo_Civil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`NivelEducativo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`NivelEducativo` ;

CREATE TABLE IF NOT EXISTS `ushi`.`NivelEducativo` (
  `Nivel_Educativo` VARCHAR(45) NOT NULL,
  `idNivelEducativo` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idNivelEducativo`),
  UNIQUE INDEX `Nivel Educativo_UNIQUE` (`Nivel Educativo` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Cargo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Cargo` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Cargo` (
  `idCargo` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` TEXT NOT NULL,
  PRIMARY KEY (`idCargo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TipoUbicacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TipoUbicacion` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TipoUbicacion` (
  `idTipoUbicacion` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoUbicacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Ubicacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Ubicacion` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Ubicacion` (
  `idUbicacion` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Ubicacion_idUbicacion` INT NULL,
  `TipoUbicacion_idTipoUbicacion` INT NOT NULL,
  PRIMARY KEY (`idUbicacion`),
  INDEX `fk_Ubicacion_Ubicacion1_idx` (`Ubicacion_idUbicacion` ASC),
  INDEX `fk_Ubicacion_TipoUbicacion1_idx` (`TipoUbicacion_idTipoUbicacion` ASC),
  CONSTRAINT `fk_Ubicacion_Ubicacion1`
    FOREIGN KEY (`Ubicacion_idUbicacion`)
    REFERENCES `ushi`.`Ubicacion` (`idUbicacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ubicacion_TipoUbicacion1`
    FOREIGN KEY (`TipoUbicacion_idTipoUbicacion`)
    REFERENCES `ushi`.`TipoUbicacion` (`idTipoUbicacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TipoAtencion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TipoAtencion` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TipoAtencion` (
  `idTipoAtencion` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` TEXT NULL,
  PRIMARY KEY (`idTipoAtencion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TipoCentro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TipoCentro` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TipoCentro` (
  `idTipoCentro` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` TEXT NULL,
  PRIMARY KEY (`idTipoCentro`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`CentroSalud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`CentroSalud` ;

CREATE TABLE IF NOT EXISTS `ushi`.`CentroSalud` (
  `idCentroSalud` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Direccion` VARCHAR(255) NOT NULL,
  `TipoCentro_idTipoCentro` INT NOT NULL,
  `TipoAtencion_idTipoAtencion` INT NOT NULL,
  PRIMARY KEY (`idCentroSalud`),
  INDEX `fk_CentroSalud_TipoCentro1_idx` (`TipoCentro_idTipoCentro` ASC),
  INDEX `fk_CentroSalud_TipoAtencion1_idx` (`TipoAtencion_idTipoAtencion` ASC),
  UNIQUE INDEX `uc_atencion_centro` (`TipoCentro_idTipoCentro` ASC, `TipoAtencion_idTipoAtencion` ASC),
  CONSTRAINT `fk_CentroSalud_TipoCentro1`
    FOREIGN KEY (`TipoCentro_idTipoCentro`)
    REFERENCES `ushi`.`TipoCentro` (`idTipoCentro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CentroSalud_TipoAtencion1`
    FOREIGN KEY (`TipoAtencion_idTipoAtencion`)
    REFERENCES `ushi`.`TipoAtencion` (`idTipoAtencion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`DiaSemana`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`DiaSemana` ;

CREATE TABLE IF NOT EXISTS `ushi`.`DiaSemana` (
  `idDiaSemana` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(9) NOT NULL,
  PRIMARY KEY (`idDiaSemana`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Accidente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Accidente` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Accidente` (
  `idAccidente` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  `DiaSemana_idDiaSemana` INT NOT NULL,
  `Hora` TIME NOT NULL,
  `Dentro` TINYINT(1) NOT NULL,
  `Ubicacion_idUbicacion` INT NULL,
  `Lugar` VARCHAR(100) NULL,
  `Descripcion` TEXT NOT NULL,
  PRIMARY KEY (`idAccidente`),
  INDEX `fk_Accidente_DiaSemana1_idx` (`DiaSemana_idDiaSemana` ASC),
  INDEX `fk_Accidente_Ubicacion1_idx` (`Ubicacion_idUbicacion` ASC),
  CONSTRAINT `fk_Accidente_DiaSemana1`
    FOREIGN KEY (`DiaSemana_idDiaSemana`)
    REFERENCES `ushi`.`DiaSemana` (`idDiaSemana`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Accidente_Ubicacion1`
    FOREIGN KEY (`Ubicacion_idUbicacion`)
    REFERENCES `ushi`.`Ubicacion` (`idUbicacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Trabajador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Trabajador` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Trabajador` (
  `idTrabajador` INT NOT NULL AUTO_INCREMENT,
  `Persona_idPersona` INT NOT NULL,
  `Nacionalidad` VARCHAR(1) NOT NULL,
  `Sexo` VARCHAR(1) NOT NULL,
  `Mano` VARCHAR(1) NOT NULL,
  `Edo_Civil_idEdo_Civil` INT NOT NULL,
  `Hijos` INT NOT NULL,
  `NivelEducativo_idNivelEducativo` INT NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `CodigoPostal` INT NOT NULL,
  `IngresoUNET` DATE NOT NULL,
  `IngresoIVSS` DATE NOT NULL,
  `Ubicacion_idUbicacion` INT NOT NULL,
  `Cargo_idCargo` INT NOT NULL,
  `Dependencia_idDependencia` INT NOT NULL,
  `Sueldo` VARCHAR(45) NOT NULL,
  `Grado_Educacion` VARCHAR(45) NULL,
  PRIMARY KEY (`idTrabajador`),
  INDEX `fk_Informacion_laboral_Persona1_idx` (`Persona_idPersona` ASC),
  INDEX `fk_Informacion_laboral_Edo_Civil1_idx` (`Edo_Civil_idEdo_Civil` ASC),
  INDEX `fk_Informacion_laboral_NivelEducativo1_idx` (`NivelEducativo_idNivelEducativo` ASC),
  INDEX `fk_Informacion_laboral_Ubicacion1_idx` (`Ubicacion_idUbicacion` ASC),
  INDEX `fk_Informacion_laboral_Cargo1_idx` (`Cargo_idCargo` ASC),
  INDEX `fk_Trabajador_Dependencia1_idx` (`Dependencia_idDependencia` ASC),
  UNIQUE INDEX `Persona_idPersona_UNIQUE` (`Persona_idPersona` ASC),
  CONSTRAINT `fk_Informacion_laboral_Persona1`
    FOREIGN KEY (`Persona_idPersona`)
    REFERENCES `ushi`.`Persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informacion_laboral_Edo_Civil1`
    FOREIGN KEY (`Edo_Civil_idEdo_Civil`)
    REFERENCES `ushi`.`Edo_Civil` (`idEdo_Civil`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informacion_laboral_NivelEducativo1`
    FOREIGN KEY (`NivelEducativo_idNivelEducativo`)
    REFERENCES `ushi`.`NivelEducativo` (`idNivelEducativo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informacion_laboral_Ubicacion1`
    FOREIGN KEY (`Ubicacion_idUbicacion`)
    REFERENCES `ushi`.`Ubicacion` (`idUbicacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Informacion_laboral_Cargo1`
    FOREIGN KEY (`Cargo_idCargo`)
    REFERENCES `ushi`.`Cargo` (`idCargo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Trabajador_Dependencia1`
    FOREIGN KEY (`Dependencia_idDependencia`)
    REFERENCES `ushi`.`Dependencia` (`idDependencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TrabajadorAccidente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TrabajadorAccidente` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TrabajadorAccidente` (
  `Accidente_idAccidente` INT NOT NULL,
  `idTrabajadorAccidente` INT NOT NULL AUTO_INCREMENT,
  `Horas` INT NOT NULL,
  `Minutos` INT NOT NULL,
  `CentroSalud_idCentroSalud` INT NOT NULL,
  `Trabajador_idTrabajador` INT NOT NULL,
  INDEX `fk_Persona_has_Accidente_Accidente1_idx` (`Accidente_idAccidente` ASC),
  PRIMARY KEY (`idTrabajadorAccidente`),
  INDEX `fk_PersonaAccidente_CentroSalud1_idx` (`CentroSalud_idCentroSalud` ASC),
  INDEX `fk_PersonaAccidente_Trabajador1_idx` (`Trabajador_idTrabajador` ASC),
  UNIQUE INDEX `uc_accidente_trabajador` (`Accidente_idAccidente` ASC, `Trabajador_idTrabajador` ASC),
  CONSTRAINT `fk_Persona_has_Accidente_Accidente1`
    FOREIGN KEY (`Accidente_idAccidente`)
    REFERENCES `ushi`.`Accidente` (`idAccidente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonaAccidente_CentroSalud1`
    FOREIGN KEY (`CentroSalud_idCentroSalud`)
    REFERENCES `ushi`.`CentroSalud` (`idCentroSalud`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PersonaAccidente_Trabajador1`
    FOREIGN KEY (`Trabajador_idTrabajador`)
    REFERENCES `ushi`.`Trabajador` (`idTrabajador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Ficha_Medica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Ficha_Medica` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Ficha_Medica` (
  `idFicha_Medica` INT NOT NULL AUTO_INCREMENT,
  `GrupoSanguineo` VARCHAR(2) NOT NULL,
  `RH` TINYINT NOT NULL,
  `EstadoSalud` VARCHAR(45) NOT NULL,
  `Persona_idPersona` INT NOT NULL,
  `Fecha` DATE NOT NULL,
  `idPariente` INT NOT NULL,
  `Parentesco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idFicha_Medica`),
  INDEX `fk_Ficha_Medica_Persona1_idx` (`Persona_idPersona` ASC),
  INDEX `fk_Ficha_Medica_Persona2_idx` (`idPariente` ASC),
  UNIQUE INDEX `uc_persona_pariente_fecha` (`Persona_idPersona` ASC, `Fecha` ASC, `idPariente` ASC),
  CONSTRAINT `fk_Ficha_Medica_Persona1`
    FOREIGN KEY (`Persona_idPersona`)
    REFERENCES `ushi`.`Persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ficha_Medica_Persona2`
    FOREIGN KEY (`idPariente`)
    REFERENCES `ushi`.`Persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TipoCondicion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TipoCondicion` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TipoCondicion` (
  `idTipoCondicion` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idTipoCondicion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Condicion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Condicion` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Condicion` (
  `idCondicion` INT NOT NULL AUTO_INCREMENT,
  `Ficha_Medica_idFicha_Medica` INT NOT NULL,
  `Detalle` VARCHAR(255) NOT NULL,
  `TipoCondicion_idTipoCondicion` INT NOT NULL,
  PRIMARY KEY (`idCondicion`),
  INDEX `fk_Condicion_Ficha_Medica1_idx` (`Ficha_Medica_idFicha_Medica` ASC),
  INDEX `fk_Condicion_TipoCondicion1_idx` (`TipoCondicion_idTipoCondicion` ASC),
  UNIQUE INDEX `uc_ficha_tipo` (`Ficha_Medica_idFicha_Medica` ASC, `TipoCondicion_idTipoCondicion` ASC),
  CONSTRAINT `fk_Condicion_Ficha_Medica1`
    FOREIGN KEY (`Ficha_Medica_idFicha_Medica`)
    REFERENCES `ushi`.`Ficha_Medica` (`idFicha_Medica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Condicion_TipoCondicion1`
    FOREIGN KEY (`TipoCondicion_idTipoCondicion`)
    REFERENCES `ushi`.`TipoCondicion` (`idTipoCondicion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Medicamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Medicamento` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Medicamento` (
  `idMedicamento` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMedicamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`CondicionMedicamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`CondicionMedicamento` ;

CREATE TABLE IF NOT EXISTS `ushi`.`CondicionMedicamento` (
  `idCondicionMedicamento` INT NOT NULL AUTO_INCREMENT,
  `Dosis` VARCHAR(15) NOT NULL,
  `EfectoSecundario` VARCHAR(45) NOT NULL,
  `Medicamento_idMedicamento` INT NOT NULL,
  `Ficha_Medica_idFicha_Medica` INT NOT NULL,
  PRIMARY KEY (`idCondicionMedicamento`),
  INDEX `fk_CondicionMedicamento_Medicamento1_idx` (`Medicamento_idMedicamento` ASC),
  INDEX `fk_CondicionMedicamento_Ficha_Medica1_idx` (`Ficha_Medica_idFicha_Medica` ASC),
  UNIQUE INDEX `uc_ficha_medicamento` (`Medicamento_idMedicamento` ASC, `Ficha_Medica_idFicha_Medica` ASC),
  CONSTRAINT `fk_CondicionMedicamento_Medicamento1`
    FOREIGN KEY (`Medicamento_idMedicamento`)
    REFERENCES `ushi`.`Medicamento` (`idMedicamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CondicionMedicamento_Ficha_Medica1`
    FOREIGN KEY (`Ficha_Medica_idFicha_Medica`)
    REFERENCES `ushi`.`Ficha_Medica` (`idFicha_Medica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Testigo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Testigo` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Testigo` (
  `Persona_idPersona` INT NOT NULL,
  `Accidente_idAccidente` INT NOT NULL,
  `idTestigo` INT NOT NULL AUTO_INCREMENT,
  INDEX `fk_Persona_has_Accidente_Accidente2_idx` (`Accidente_idAccidente` ASC),
  INDEX `fk_Persona_has_Accidente_Persona1_idx` (`Persona_idPersona` ASC),
  PRIMARY KEY (`idTestigo`),
  UNIQUE INDEX `uc_accidente_persona` (`Persona_idPersona` ASC, `Accidente_idAccidente` ASC),
  CONSTRAINT `fk_Persona_has_Accidente_Persona1`
    FOREIGN KEY (`Persona_idPersona`)
    REFERENCES `ushi`.`Persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Persona_has_Accidente_Accidente2`
    FOREIGN KEY (`Accidente_idAccidente`)
    REFERENCES `ushi`.`Accidente` (`idAccidente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TipoRuta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TipoRuta` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TipoRuta` (
  `idTipoRuta` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipoRuta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`TrabajadorRuta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`TrabajadorRuta` ;

CREATE TABLE IF NOT EXISTS `ushi`.`TrabajadorRuta` (
  `idTrabajadorRuta` INT NOT NULL AUTO_INCREMENT,
  `Detalle` TEXT NOT NULL,
  `TipoRuta_idTipoRuta` INT NOT NULL,
  `Trabajador_idTrabajador` INT NOT NULL,
  PRIMARY KEY (`idTrabajadorRuta`),
  INDEX `fk_TrabajadorRuta_Ruta1_idx` (`TipoRuta_idTipoRuta` ASC),
  INDEX `fk_TrabajadorRuta_Trabajador1_idx` (`Trabajador_idTrabajador` ASC),
  UNIQUE INDEX `uc_ruta_trabajador` (`TipoRuta_idTipoRuta` ASC, `Trabajador_idTrabajador` ASC),
  CONSTRAINT `fk_TrabajadorRuta_Ruta1`
    FOREIGN KEY (`TipoRuta_idTipoRuta`)
    REFERENCES `ushi`.`TipoRuta` (`idTipoRuta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TrabajadorRuta_Trabajador1`
    FOREIGN KEY (`Trabajador_idTrabajador`)
    REFERENCES `ushi`.`Trabajador` (`idTrabajador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Roles` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Roles` (
  `idRoles` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`idRoles`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Roles_idRoles` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Usuarios_Roles1_idx` (`Roles_idRoles` ASC),
  UNIQUE INDEX `Usuario_UNIQUE` (`Usuario` ASC),
  CONSTRAINT `fk_Usuarios_Roles1`
    FOREIGN KEY (`Roles_idRoles`)
    REFERENCES `ushi`.`Roles` (`idRoles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Vacuna`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Vacuna` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Vacuna` (
  `idVacuna` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(60) NOT NULL,
  `Descripcion` VARCHAR(255) NULL,
  PRIMARY KEY (`idVacuna`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Ficha_Vacuna`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Ficha_Vacuna` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Ficha_Vacuna` (
  `idFicha_Vacuna` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  `Ficha_Medica_idFicha_Medica` INT NOT NULL,
  `Vacuna_idVacuna` INT NOT NULL,
  INDEX `fk_Ficha_Medica_has_Vacuna_Vacuna1_idx` (`Vacuna_idVacuna` ASC),
  INDEX `fk_Ficha_Medica_has_Vacuna_Ficha_Medica1_idx` (`Ficha_Medica_idFicha_Medica` ASC),
  PRIMARY KEY (`idFicha_Vacuna`),
  UNIQUE INDEX `uk_ficha_vacuna` (`Ficha_Medica_idFicha_Medica` ASC, `Vacuna_idVacuna` ASC),
  CONSTRAINT `fk_Ficha_Medica_has_Vacuna_Ficha_Medica1`
    FOREIGN KEY (`Ficha_Medica_idFicha_Medica`)
    REFERENCES `ushi`.`Ficha_Medica` (`idFicha_Medica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ficha_Medica_has_Vacuna_Vacuna1`
    FOREIGN KEY (`Vacuna_idVacuna`)
    REFERENCES `ushi`.`Vacuna` (`idVacuna`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ushi`.`Notas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ushi`.`Notas` ;

CREATE TABLE IF NOT EXISTS `ushi`.`Notas` (
  `idNotas` INT NOT NULL AUTO_INCREMENT,
  `Nota1` VARCHAR(255) NULL,
  `Nota2` VARCHAR(255) NULL,
  `Nota3` VARCHAR(255) NULL,
  PRIMARY KEY (`idNotas`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
