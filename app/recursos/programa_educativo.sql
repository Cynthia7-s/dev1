-- Eliminar la base de datos existente si existe
DROP DATABASE IF EXISTS programa_educativo;

-- Crear la base de datos con el nombre correcto y configuración de caracteres
CREATE DATABASE IF NOT EXISTS programa_educativo DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Asignar todos los privilegios a un usuario en la base de datos
GRANT ALL PRIVILEGES ON programa_educativo.* TO 'root'@'localhost' IDENTIFIED BY 'Zarate27/';

-- Cambiar al contexto de la nueva base de datos
USE programa_educativo;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `rol`) VALUES
(745, 'Adminstrador'),
(125, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `estatus_usuario` tinyint(1) NULL DEFAULT 1 COMMENT '1 -> Habilitado, -1 -> Deshabilitado',
  `idusuario` int(3) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NULL,
  `sexo` tinyint(1) NOT NULL COMMENT '0: Masculino, 1: Femenino',
  `correo` varchar(45) NOT NULL,
  `password` varchar(64) NOT NULL,
  `imagen_perfil` varchar(100) DEFAULT NULL,
  `idrol` int(3) DEFAULT NULL,
  FOREIGN KEY (idrol) REFERENCES rol(idrol) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido_paterno`, `apellido_materno`, `sexo`, `correo`, `password`, `imagen_perfil`, `idrol`) VALUES
('Adminstrador', 'Adminstrador','',0, 'admin@gmail.com', SHA2('admin123',0),NULL, 745),
('Operador','Operador','', 1, 'operador@gmail.com', SHA2('operador123',0), NULL,125);



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` char(1) NOT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `idAsignatura` int(11) NOT NULL,
  `asignatura` varchar(100) NOT NULL,
  `acronimo` varchar(45) NOT NULL,
  `creditos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `idcalificaciones` int(11) NOT NULL,
  `calificacion_a` int(11) NOT NULL,
  `calificacion_b` int(11) NOT NULL,
  `calificacion_c` varchar(45) NOT NULL,
  `calificacion_d` varchar(45) NOT NULL,
  `calificacion_final` varchar(45) NOT NULL,
  `idlista_alumnos` int(11) DEFAULT NULL,
  `idperiodo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_horaria`
--

CREATE TABLE `carga_horaria` (
  `idcarga_horaria` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `idperiodo` int(11) NOT NULL,
  `fecha_asignacion` datetime NOT NULL,
  `ponderacion_parcial_a` int(11) NOT NULL,
  `ponderacion_parcial_b` int(11) DEFAULT NULL,
  `ponderacion_parcial_c` int(11) NOT NULL,
  `ponderacion_parcial_d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `iddocente` int(11) NOT NULL,
  `numero_empleado` varchar(45) NOT NULL,
  `grado_estudios` varchar(100) NOT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idpe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_alumnos`
--

CREATE TABLE `lista_alumnos` (
  `idlista_alumnos` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `idalumno` int(11) NOT NULL,
  `iddocente` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `tipo_asistencia` tinyint(1) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `estatus_alumno` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `idperiodo` int(11) NOT NULL,
  `nombreperiodo` varchar(45) NOT NULL,
  `acronimo` varchar(45) NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` varchar(45) NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_educativo`
--

CREATE TABLE `programa_educativo` (
  `idpe` int(11) NOT NULL,
  `programa_educativo` varchar(100) NOT NULL,
  `acronimo` varchar(45) NOT NULL,
  `logo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idalumno`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`idAsignatura`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`idcalificaciones`),
  ADD KEY `idlista_alumnos` (`idlista_alumnos`),
  ADD KEY `idperiodo` (`idperiodo`);

--
-- Indices de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD PRIMARY KEY (`idcarga_horaria`),
  ADD KEY `idAsignatura` (`idAsignatura`),
  ADD KEY `iddocente` (`iddocente`),
  ADD KEY `idperiodo` (`idperiodo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`iddocente`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idpe` (`idpe`);

--
-- Indices de la tabla `lista_alumnos`
--
ALTER TABLE `lista_alumnos`
  ADD PRIMARY KEY (`idlista_alumnos`),
  ADD KEY `idalumno` (`idalumno`),
  ADD KEY `iddocente` (`iddocente`),
  ADD KEY `idAsignatura` (`idAsignatura`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`idperiodo`);

--
-- Indices de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  ADD PRIMARY KEY (`idpe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `idAsignatura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `idcalificaciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  MODIFY `idcarga_horaria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `iddocente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_alumnos`
--
ALTER TABLE `lista_alumnos`
  MODIFY `idlista_alumnos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `idperiodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa_educativo`
--
ALTER TABLE `programa_educativo`
  MODIFY `idpe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`idlista_alumnos`) REFERENCES `lista_alumnos` (`idlista_alumnos`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`idperiodo`) REFERENCES `periodo` (`idperiodo`);

--
-- Filtros para la tabla `carga_horaria`
--
ALTER TABLE `carga_horaria`
  ADD CONSTRAINT `carga_horaria_ibfk_1` FOREIGN KEY (`idAsignatura`) REFERENCES `asignatura` (`idAsignatura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carga_horaria_ibfk_2` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddocente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carga_horaria_ibfk_3` FOREIGN KEY (`idperiodo`) REFERENCES `periodo` (`idperiodo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `docente_ibfk_2` FOREIGN KEY (`idpe`) REFERENCES `programa_educativo` (`idpe`);

--
-- Filtros para la tabla `lista_alumnos`
--
ALTER TABLE `lista_alumnos`
  ADD CONSTRAINT `lista_alumnos_ibfk_1` FOREIGN KEY (`idalumno`) REFERENCES `alumno` (`idalumno`),
  ADD CONSTRAINT `lista_alumnos_ibfk_2` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddocente`),
  ADD CONSTRAINT `lista_alumnos_ibfk_3` FOREIGN KEY (`idAsignatura`) REFERENCES `asignatura` (`idAsignatura`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
