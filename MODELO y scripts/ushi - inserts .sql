-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `Nombre`, `Apellido`, `Cedula`, `FechaNacimiento`, `Direccion`, `Telefono`, `Celular`) VALUES
(1, 'Juan', 'Castillo', '20120737', '1990-05-03', 'San Cristobal', '29910883', '99109901'),
(2, 'Martin', 'Lopez', '15923487', '1982-08-20', 'San Cristobal', '887691', '9917621'),
(3, 'Pedro', 'Carvajal', '13983487', '1980-07-25', 'San Cristobal', '8753691', '983621'),
(4, 'Luis Miguel', 'Molina', '21542121', '1993-11-13', 'Rubio', '04149750344', '04149750344');
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `dependencia`
--

INSERT INTO `dependencia` (`idDependencia`, `Nombre`) VALUES
(1, 'Docencia'),
(2, 'Administrativo'),
(3, 'Bienestrar');
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `edo_civil`
--

INSERT INTO `edo_civil` (`idEdo_Civil`, `Nombre`) VALUES
(1, 'Soltero'),
(2, 'Casado'),
(3, 'Divorciado');
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `educacion`
--

INSERT INTO `educacion` (`idEducacion`, `Nombre`) VALUES
(1, 'TSU'),
(2, 'Bachiller'),
(3, 'Ingeniero');

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`idGrado`, `Grado`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `niveleducativo`
--

INSERT INTO `niveleducativo` (`Educacion_idEducacion`, `Grado_idGrado`, `idNivelEducativo`) VALUES
(1, 1, 1),
(1, 2, 3),
(2, 1, 2),
(3, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--
INSERT INTO `cargo` (`idCargo`, `Nombre`, `Descripcion`) VALUES
(1, 'Seguridad', 'Encargado de vigilancia en las entradas al campus'),
(2, 'Cocinero', 'Servicio de comedor'),
(3, 'Docente', 'Encargado de docencia directa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoUbicacion`
--
INSERT INTO `TipoUbicacion` (`idTipoUbicacion`, `Nombre`) VALUES
(1, 'Estado'),
(2, 'Municipio'),
(3, 'Parroquia');
-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`idUbicacion`, `Nombre`, `Ubicacion_idUbicacion`, `TipoUbicacion_idTipoUbicacion`) VALUES
(1, 'Tachira', NULL,1),
(2, 'San Cristobal', 1,2),
(3, 'Junin', 1,2),
(4, 'Rubio', 3,3);
-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `tipoatencion`
--

INSERT INTO `tipoatencion` (`idTipoAtencion`, `Nombre`, `Descripcion`) VALUES
(1, 'Emergencia', 'Emergencia'),
(2, 'Consulta', 'Especialista'),
(3, 'Trauma', 'Accidente grave');

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `tipocentro`
--

INSERT INTO `tipocentro` (`idTipoCentro`, `Nombre`, `Descripcion`) VALUES
(1, 'Hospital Publico', 'Publico'),
(2, 'Clinica', 'Privada'),
(3, 'Centro Ambulatorio', 'Publico');
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `centrosalud`
--

INSERT INTO `centrosalud` (`idCentroSalud`, `Nombre`, `Direccion`, `TipoCentro_idTipoCentro`, `TipoAtencion_idTipoAtencion`) VALUES
(1, 'Hosp. Militar', 'Pueblo Nuevo', 1, 1),
(2, 'Policlinica', 'Frente a MCdonalds', 2, 2),
(3, 'Coromoto', 'Barrio Obrero', 2, 3);
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `diasemana`
--

INSERT INTO `diasemana` (`idDiaSemana`, `Nombre`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');


-- --------------------------------------------------------
INSERT INTO `accidente` (`idAccidente`, `Fecha`, `DiaSemana_idDiaSemana`, `Hora`, `Dentro`, `Ubicacion_idUbicacion`, `Lugar`, `Descripcion`) VALUES
(1, '2008-11-13', 2, '09:45:00', 1, 1, 'Edificio C', 'Caida de las escaleras'),
(2, '2001-05-13', 4, '11:30:00', 1, 1, 'Edificio C', 'Caida de las escaleras'),
(3, '2001-05-13', 4, '03:30:00', 0, 1, 'Av. 19 de Abril', 'Choque automovilistico');
-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`idTrabajador`, `Persona_idPersona`, `Nacionalidad`, `Sexo`, `Mano`, `Edo_Civil_idEdo_Civil`, `Hijos`, `NivelEducativo_idNivelEducativo`, `Email`, `CodigoPostal`, `IngresoUNET`, `IngresoIVSS`, `Ubicacion_idUbicacion`, `Cargo_idCargo`, `Dependencia_idDependencia`, `Sueldo`) VALUES
(1, 1, 'V', 'M', 'D', 1, 0, 2, 'jcppioam@mooal', 5001, '2015-10-08', '2015-10-07', 2, 3, 1, '5500'),
(2, 2, 'V', 'M', 'D', 1, 0, 2, 'jcppioam@mooal', 5001, '2015-10-08', '2015-10-07', 2, 1, 1, '5500'),
(3, 3, 'V', 'M', 'D', 1, 0, 2, 'jcppioam@mooal', 5001, '2015-10-08', '2015-10-07', 2, 3, 1, '5500'),
(4, 4, 'V', 'M', 'D', 1, 0, 3, 'lm.molinab@gmail.com', 5030, '2009-10-01', '2009-10-01', 1, 3, 1, '100');

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `trabajadoraccidente`
--

INSERT INTO `trabajadoraccidente` (`Accidente_idAccidente`, `idTrabajadorAccidente`, `Horas`, `Minutos`, `CentroSalud_idCentroSalud`, `Trabajador_idTrabajador`) VALUES
(1, 1, 3, 10, 3, 1),
(2, 2, 4, 11, 2, 2),
(3, 3, 2, 24, 1, 3),
(2, 4, 1, 22, 3, 3);

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `ficha_medica`
--

INSERT INTO `ficha_medica` (`idFicha_Medica`, `GrupoSanguineo`, `RH`, `EstadoSalud`, `Persona_idPersona`, `Fecha`, `idPariente`, `Parentesco`) VALUES
(1, 'O', 1, 'Saludable',  2, '2004-10-14', 3, 'Primo'),
(2, 'O', 0, 'Saludable',  3, '2004-10-14', 2, 'Primo'),
(3, 'O', 0, 'Saludable',  3, '2004-10-13', 2, 'Primo');

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `tipocondicion`
--

INSERT INTO `tipocondicion` (`idTipoCondicion`, `Nombre`) VALUES
(1, 'Diabetes'),
(2, 'Epilepsia'),
(3, 'Hipertension'),
(4, 'Alergia'),
(5, 'Alergia a Medicamento');


-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`idCondicion`, `Ficha_Medica_idFicha_Medica`, `Detalle`, `TipoCondicion_idTipoCondicion`) VALUES
(1, 1, 'Penicilina, Omex', 5),
(2, 1, 'Luces fuertes producen ataques', 2),
(3, 2, 'Diabetes tipo 2', 1);


-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`idMedicamento`, `Nombre`) VALUES
(1, 'Brugesic'),
(2, 'Penicilina'),
(3, 'Atamel');


-- --------------------------------------------------------


INSERT INTO `condicionmedicamento` (`idCondicionMedicamento`, `Dosis`, `EfectoSecundario`, `Medicamento_idMedicamento`, `Ficha_Medica_idFicha_Medica`) VALUES
(1, '1 tableta', 'Alergia en la piel', 1, 1),
(2, '.05dc', 'Alergia', 2, 1),
(3, '1 tableta', 'Dolor de cabeza', 3, 2);


-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `testigo`
--

INSERT INTO `testigo` (`Persona_idPersona`, `Accidente_idAccidente`, `idTestigo`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 1, 3);

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `tiporuta`
--

INSERT INTO `tiporuta` (`idTipoRuta`, `Nombre`) VALUES
(1, 'Hogar'),
(2, 'Trabajo');


-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `trabajadorruta`
--

INSERT INTO `trabajadorruta` (`idTrabajadorRuta`, `Detalle`, `TipoRuta_idTipoRuta`, `Trabajador_idTrabajador`) VALUES
(1, 'Ruta principal', 1, 1),
(2, 'Ruta principal', 1, 2),
(3, 'Ruta Secundaria', 2, 2),
(4, 'Ruta Rapida', 1, 3);

-- --------------------------------------------------------
--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `Nombre`, `Descripcion`) VALUES
(1, 'Administrador', ''),
(2, 'Usuario', 'Capacidad limitada');


-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Usuario`, `Password`, `Roles_idRoles`) VALUES
(1, 'D.Hernandez', '1234', 1),
(2, 'J.Perez', '1234', 2),
(3, 'M.Lopez', '1234', 2);
-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `vacuna`
--

INSERT INTO `Vacuna` (`idVacuna`, `Nombre`, `Descripcion`) VALUES
(1, 'Antitetanica', 'Para el tetanos');

-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `Ficha_Vacuna`
--

INSERT INTO `Ficha_Vacuna` (`idFicha_Vacuna`, `Fecha`, `Ficha_Medica_idFicha_Medica`, `Vacuna_idVacuna`) VALUES
(1, '2010-01-14', 1, 1),
(2, '2010-01-14', 2, 1),
(3, '2010-01-14', 3, 1);

-- --------------------------------------------------------

--
-- Volcado de datos para la tabla `Notas`
--

INSERT INTO `Notas` (`idNotas`, `Nota1`, `Nota2`, `Nota3`) VALUES
(1, 'Esta es una actividad próxima', 'Esta es otra actividad','Y una actividad mas');