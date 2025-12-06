<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignación de Docentes - Sistema Académico</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-blue: #003454;
            --secondary-blue: #005c99;
            --light-blue: #e3f4ff;
            --accent-blue: #3a7bd5;
            --form-bg: #f9fcff;
            --border-color: #c5e0ff;
            --danger-color: #dc3545;
            --success-color: #28a745;
            --warning-color: #ffc107;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial", sans-serif;
            font-size: 11px;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            color: var(--primary-blue);
            padding: 0;
        }

        .container {
            width: 100%;
            background: white;
            min-height: 100vh;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 25px 40px;
            width: 100%;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            max-width: 100%;
        }

        .page-title {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .page-title i {
            font-size: 28px;
            background: rgba(255, 255, 255, 0.2);
            padding: 12px;
            border-radius: 50%;
        }

        .title-text h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .title-text p {
            opacity: 0.9;
            font-size: 14px;
        }

        .navigation {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .nav-button {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 11px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .content {
            padding: 35px 40px;
            width: 100%;
        }

        .form-header {
            margin-bottom: 25px;
            padding-bottom: 18px;
            border-bottom: 2px solid var(--border-color);
            width: 100%;
        }

        .form-header h2 {
            color: var(--primary-blue);
            font-size: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
        }

        .form-header p {
            font-size: 11px;
            color: #666;
        }

        .info-alert {
            background: linear-gradient(135deg, #e3f4ff, #d2ecff);
            border-left: 4px solid var(--accent-blue);
            padding: 18px;
            margin-bottom: 25px;
            border-radius: 0 8px 8px 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
            width: 100%;
        }

        .info-alert i {
            font-size: 20px;
            color: var(--accent-blue);
            margin-top: 2px;
        }

        .info-alert p {
            font-size: 11px;
            line-height: 1.5;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 22px;
            margin-bottom: 22px;
            width: 100%;
        }

        .form-group {
            margin-bottom: 22px;
            width: 100%;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary-blue);
            font-size: 11px;
        }

        .required::after {
            content: " *";
            color: var(--danger-color);
        }

        input, select, textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-family: "Arial", sans-serif;
            font-size: 11px;
            transition: all 0.3s ease;
            background: var(--form-bg);
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: var(--accent-blue);
            box-shadow: 0 0 0 3px rgba(58, 123, 213, 0.15);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .section-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--primary-blue);
            margin: 25px 0 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 35px;
            padding-top: 22px;
            border-top: 1px solid var(--border-color);
            width: 100%;
        }

        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-family: "Arial", sans-serif;
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--secondary-blue), var(--accent-blue));
            color: white;
            min-width: 160px;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--accent-blue), #009dff);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 123, 255, 0.25);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #868e96);
            color: white;
        }

        .btn-secondary:hover {
            background: linear-gradient(135deg, #868e96, #a0a7b0);
            transform: translateY(-2px);
        }

        .form-help {
            font-size: 10px;
            color: #666;
            margin-top: 6px;
            font-style: italic;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 10px;
            font-weight: 600;
            margin-left: 8px;
        }

        .status-active {
            background: rgba(40, 167, 69, 0.15);
            color: var(--success-color);
        }

        .status-inactive {
            background: rgba(108, 117, 125, 0.15);
            color: #6c757d;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.15);
            color: var(--warning-color);
        }

        .table-container {
            margin-top: 20px;
            overflow-x: auto;
            width: 100%;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 11px;
            min-width: 1000px;
        }

        .data-table th {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 12px 15px;
            text-align: left;
            font-weight: 600;
            border: none;
            white-space: nowrap;
        }

        .data-table td {
            padding: 10px 15px;
            border-bottom: 1px solid var(--border-color);
            white-space: nowrap;
        }

        .data-table tr:nth-child(even) {
            background-color: var(--form-bg);
        }

        .data-table tr:hover {
            background-color: #e6f2ff;
        }

        .action-btn {
            padding: 4px 10px;
            border: none;
            border-radius: 4px;
            font-size: 10px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: all 0.3s ease;
            margin: 2px;
        }

        .btn-assign {
            background: linear-gradient(135deg, var(--success-color), #20c997);
            color: white;
        }

        .btn-assign:hover {
            background: linear-gradient(135deg, #20c997, #1eae8c);
        }

        .btn-reassign {
            background: linear-gradient(135deg, var(--accent-blue), #3399ff);
            color: white;
        }

        .btn-reassign:hover {
            background: linear-gradient(135deg, #3399ff, #2980cc);
        }

        .btn-remove {
            background: linear-gradient(135deg, var(--danger-color), #e74c3c);
            color: white;
        }

        .btn-remove:hover {
            background: linear-gradient(135deg, #e74c3c, #c0392b);
        }

        .search-box {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
            width: 100%;
        }

        .search-input {
            flex: 1;
            min-width: 300px;
        }

        .filter-group {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
            width: 100%;
        }

        .stat-card {
            background: linear-gradient(135deg, #f9fcff, #e6f2ff);
            border-left: 4px solid var(--accent-blue);
            padding: 15px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
        }

        .stat-icon {
            font-size: 24px;
            color: var(--accent-blue);
            background: rgba(58, 123, 213, 0.1);
            padding: 12px;
            border-radius: 8px;
        }

        .stat-content h3 {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 4px;
        }

        .stat-content p {
            font-size: 11px;
            color: #666;
        }

        /* Modal Styles */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 700px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h3 {
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }

        .modal-close {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #666;
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .header {
                padding: 20px;
            }
            
            .content {
                padding: 20px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
                gap: 18px;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .btn {
                width: 100%;
            }
            
            .nav-button {
                padding: 6px 12px;
                font-size: 10px;
            }
            
            .search-box {
                flex-direction: column;
            }
            
            .search-input {
                min-width: 100%;
            }
            
            .filter-group {
                flex-direction: column;
                align-items: stretch;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .modal-content {
                padding: 20px;
                max-width: 100%;
            }
        }

        @media (max-width: 480px) {
            .title-text h1 {
                font-size: 20px;
            }
            
            .title-text p {
                font-size: 12px;
            }
            
            .content {
                padding: 15px;
            }
            
            .form-header h2 {
                font-size: 18px;
            }
            
            .data-table {
                font-size: 10px;
            }
            
            .action-btn {
                padding: 3px 6px;
                font-size: 9px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Encabezado -->
        <div class="header">
            <div class="header-content">
                <div class="page-title">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <div class="title-text">
                        <h1>Asignación de Docentes</h1>
                        <p>Sistema de Gestión Universitaria - Departamento Académico</p>
                    </div>
                </div>
                
                <div class="navigation">
                    <a href="{{ route('curso_materia.editar_informacion') }}" class="nav-button">
                        <i class="fas fa-edit"></i> Editar Información
                    </a>
                    <a href="{{ route('curso_materia.listar_materias') }}" class="nav-button">
                        <i class="fas fa-book"></i> Listar Materias
                    </a>
                    <a href="{{ route('curso_materia.baja_materias') }}" class="nav-button">
                        <i class="fas fa-trash-alt"></i> Baja de Materias
                    </a>
                </div>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="content">
            <!-- Encabezado del Formulario -->
            <div class="form-header">
                <h2><i class="fas fa-tasks"></i> Gestión de Asignación de Docentes</h2>
                <p>Asigne docentes a cursos y materias del período académico actual</p>
            </div>

            <!-- Alerta Informativa -->
            <div class="info-alert">
                <i class="fas fa-info-circle"></i>
                <p><strong>INFORMACIÓN IMPORTANTE:</strong> El proceso de asignación de docentes debe realizarse considerando la disponibilidad horaria, especialización y carga académica de cada docente. Los cambios realizados afectarán inmediatamente el horario académico de los estudiantes.</p>
            </div>

            <!-- Estadísticas -->
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-content">
                        <h3>12</h3>
                        <p>Cursos por asignar</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-content">
                        <h3>28</h3>
                        <p>Docentes disponibles</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="stat-content">
                        <h3>45</h3>
                        <p>Cursos asignados</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3>2023-2</h3>
                        <p>Periodo actual</p>
                    </div>
                </div>
            </div>

            <!-- Formulario de Búsqueda y Filtros -->
            <div class="form-grid">
                <div class="form-group">
                    <label for="periodo_academico">Periodo Académico</label>
                    <select id="periodo_academico" name="periodo_academico">
                        <option value="2023-2" selected>2023-2 (Actual)</option>
                        <option value="2023-1">2023-1</option>
                        <option value="2022-2">2022-2</option>
                        <option value="2022-1">2022-1</option>
                    </select>
                    <div class="form-help">Seleccione el período académico</div>
                </div>

                <div class="form-group">
                    <label for="facultad">Facultad</label>
                    <select id="facultad" name="facultad">
                        <option value="">Todas las facultades</option>
                        <option value="INGENIERIA">Ingeniería</option>
                        <option value="CIENCIAS_SOCIALES">Ciencias Sociales</option>
                        <option value="CIENCIAS_SALUD">Ciencias de la Salud</option>
                        <option value="HUMANIDADES">Humanidades</option>
                        <option value="ARQUITECTURA">Arquitectura y Diseño</option>
                    </select>
                    <div class="form-help">Filtre por facultad específica</div>
                </div>
            </div>

            <!-- Búsqueda Avanzada -->
            <div class="search-box">
                <div class="search-input">
                    <input type="text" id="buscar_curso" placeholder="Buscar por código de curso, nombre o docente...">
                </div>
                <div class="filter-group">
                    <select id="estado_asignacion" style="width: 150px;">
                        <option value="">Todos los estados</option>
                        <option value="ASIGNADO">Asignado</option>
                        <option value="NO_ASIGNADO">No asignado</option>
                        <option value="PENDIENTE">Pendiente</option>
                    </select>
                    <button type="button" class="btn btn-primary" onclick="filtrarCursos()">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="limpiarFiltros()">
                        <i class="fas fa-redo"></i> Limpiar
                    </button>
                </div>
            </div>

            <!-- Tabla de Asignación -->
            <h3 class="section-title"><i class="fas fa-list"></i> Cursos Disponibles para Asignación</h3>
            
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Curso / Materia</th>
                            <th>Facultad</th>
                            <th>Créditos</th>
                            <th>Horas</th>
                            <th>Docente Asignado</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>MAT101</td>
                            <td>Cálculo I</td>
                            <td>Ingeniería</td>
                            <td>4</td>
                            <td>6</td>
                            <td>Dr. Carlos Rodríguez</td>
                            <td><span class="status-badge status-active">Asignado</span></td>
                            <td>
                                <button class="action-btn btn-reassign" onclick="abrirModalAsignacion('MAT101', 'Cálculo I')">
                                    <i class="fas fa-edit"></i> Reasignar
                                </button>
                                <button class="action-btn btn-remove" onclick="eliminarAsignacion('MAT101')">
                                    <i class="fas fa-times"></i> Quitar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>FIS201</td>
                            <td>Física</td>
                            <td>Ingeniería</td>
                            <td>5</td>
                            <td>8</td>
                            <td>Dra. Ana Martínez</td>
                            <td><span class="status-badge status-active">Asignado</span></td>
                            <td>
                                <button class="action-btn btn-reassign" onclick="abrirModalAsignacion('FIS201', 'Física')">
                                    <i class="fas fa-edit"></i> Reasignar
                                </button>
                                <button class="action-btn btn-remove" onclick="eliminarAsignacion('FIS201')">
                                    <i class="fas fa-times"></i> Quitar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>PSI301</td>
                            <td>Psicología del Desarrollo</td>
                            <td>Ciencias Sociales</td>
                            <td>3</td>
                            <td>4</td>
                            <td>No asignado</td>
                            <td><span class="status-badge status-inactive">Sin asignar</span></td>
                            <td>
                                <button class="action-btn btn-assign" onclick="abrirModalAsignacion('PSI301', 'Psicología del Desarrollo')">
                                    <i class="fas fa-user-plus"></i> Asignar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>ARQ202</td>
                            <td>Diseño Arquitectónico</td>
                            <td>Arquitectura y Diseño</td>
                            <td>4</td>
                            <td>6</td>
                            <td>Arq. Luis Fernández</td>
                            <td><span class="status-badge status-active">Asignado</span></td>
                            <td>
                                <button class="action-btn btn-reassign" onclick="abrirModalAsignacion('ARQ202', 'Diseño Arquitectónico')">
                                    <i class="fas fa-edit"></i> Reasignar
                                </button>
                                <button class="action-btn btn-remove" onclick="eliminarAsignacion('ARQ202')">
                                    <i class="fas fa-times"></i> Quitar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>MED101</td>
                            <td>Anatomía Humana</td>
                            <td>Ciencias de la Salud</td>
                            <td>6</td>
                            <td>10</td>
                            <td>No asignado</td>
                            <td><span class="status-badge status-pending">Pendiente</span></td>
                            <td>
                                <button class="action-btn btn-assign" onclick="abrirModalAsignacion('MED101', 'Anatomía Humana')">
                                    <i class="fas fa-user-plus"></i> Asignar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>QUI202</td>
                            <td>Química Orgánica</td>
                            <td>Ciencias de la Salud</td>
                            <td>4</td>
                            <td>6</td>
                            <td>Dr. Pedro González</td>
                            <td><span class="status-badge status-active">Asignado</span></td>
                            <td>
                                <button class="action-btn btn-reassign" onclick="abrirModalAsignacion('QUI202', 'Química Orgánica')">
                                    <i class="fas fa-edit"></i> Reasignar
                                </button>
                                <button class="action-btn btn-remove" onclick="eliminarAsignacion('QUI202')">
                                    <i class="fas fa-times"></i> Quitar
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>HIS103</td>
                            <td>Historia Universal</td>
                            <td>Humanidades</td>
                            <td>3</td>
                            <td>4</td>
                            <td>No asignado</td>
                            <td><span class="status-badge status-inactive">Sin asignar</span></td>
                            <td>
                                <button class="action-btn btn-assign" onclick="abrirModalAsignacion('HIS103', 'Historia Universal')">
                                    <i class="fas fa-user-plus"></i> Asignar
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Botones de Acción -->
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">
                    <i class="fas fa-arrow-left"></i> Volver
                </button>
                <button type="button" class="btn btn-primary" onclick="abrirModalAsignacionMultiple()">
                    <i class="fas fa-users"></i> Asignación Múltiple
                </button>
                <button type="button" class="btn btn-primary" onclick="generarReporte()">
                    <i class="fas fa-file-export"></i> Generar Reporte
                </button>
            </div>
        </div>
    </div>

    <!-- Modal para Asignación -->
    <div id="modalAsignacion" class="modal-overlay">
        <div class="modal-content">
            <div class="modal-header">
                <h3><i class="fas fa-user-plus"></i> <span id="modalTitulo">Asignar Docente</span></h3>
                <button class="modal-close" onclick="cerrarModal()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <div class="form-grid">
                <div class="form-group">
                    <label for="modalCurso" class="required">Curso</label>
                    <input type="text" id="modalCurso" readonly style="background: #f0f0f0;">
                </div>
                
                <div class="form-group">
                    <label for="modalDocente" class="required">Seleccionar Docente</label>
                    <select id="modalDocente">
                        <option value="">-- Seleccione un docente --</option>
                        <option value="DOC001">Dr. Carlos Rodríguez (Matemáticas)</option>
                        <option value="DOC002">Dra. Ana Martínez (Física)</option>
                        <option value="DOC003">Dra. Marta Jiménez (Psicología)</option>
                        <option value="DOC004">Arq. Luis Fernández (Arquitectura)</option>
                        <option value="DOC005">Dr. Manuel Ortiz (Medicina)</option>
                        <option value="DOC006">Dr. Pedro González (Química)</option>
                        <option value="DOC007">Lic. María López (Historia)</option>
                    </select>
                    <div class="form-help">Docentes disponibles para el curso seleccionado</div>
                </div>
            </div>
            
            <div class="form-grid">
                <div class="form-group">
                    <label for="modalTipo" class="required">Tipo de Asignación</label>
                    <select id="modalTipo">
                        <option value="TITULAR">Titular</option>
                        <option value="ADJUNTO">Adjunto</option>
                        <option value="SUPLENTE">Suplente</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="modalGrupos">Grupos Asignados</label>
                    <input type="text" id="modalGrupos" placeholder="Ej: 01, 02, 03">
                </div>
            </div>
            
            <div class="form-group">
                <label for="modalHorario">Horario Propuesto</label>
                <textarea id="modalHorario" rows="3" placeholder="Especifique los días y horas de clase..."></textarea>
            </div>
            
            <div class="form-actions" style="margin-top: 20px; padding-top: 20px; border-top: 1px solid var(--border-color);">
                <button type="button" class="btn btn-secondary" onclick="cerrarModal()">
                    <i class="fas fa-times"></i> Cancelar
                </button>
                <button type="button" class="btn btn-primary" onclick="confirmarAsignacion()">
                    <i class="fas fa-save"></i> Guardar Asignación
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar eventos
            document.getElementById('buscar_curso').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    filtrarCursos();
                }
            });
        });

        let cursoActual = '';
        
        function filtrarCursos() {
            const busqueda = document.getElementById('buscar_curso').value.toLowerCase();
            const facultad = document.getElementById('facultad').value;
            const estado = document.getElementById('estado_asignacion').value;
            
            // Aquí iría la lógica de filtrado real
            alert(`Filtrando por:\n• Búsqueda: ${busqueda || 'Todas'}\n• Facultad: ${facultad || 'Todas'}\n• Estado: ${estado || 'Todos'}`);
        }
        
        function limpiarFiltros() {
            document.getElementById('buscar_curso').value = '';
            document.getElementById('facultad').value = '';
            document.getElementById('estado_asignacion').value = '';
            alert('Filtros limpiados');
        }
        
        function abrirModalAsignacion(codigo, nombre) {
            cursoActual = codigo;
            document.getElementById('modalTitulo').textContent = `Asignar Docente a ${codigo} - ${nombre}`;
            document.getElementById('modalCurso').value = `${codigo} - ${nombre}`;
            document.getElementById('modalDocente').value = '';
            document.getElementById('modalTipo').value = 'TITULAR';
            document.getElementById('modalGrupos').value = '';
            document.getElementById('modalHorario').value = '';
            
            document.getElementById('modalAsignacion').style.display = 'flex';
        }
        
        function cerrarModal() {
            document.getElementById('modalAsignacion').style.display = 'none';
        }
        
        function confirmarAsignacion() {
            const docente = document.getElementById('modalDocente').value;
            const tipo = document.getElementById('modalTipo').value;
            
            if (!docente) {
                alert('Por favor seleccione un docente');
                return;
            }
            
            const confirmacion = confirm(`¿Confirmar asignación del docente al curso ${cursoActual}?\n\n• Tipo: ${tipo}\n\nLa asignación será registrada en el sistema.`);
            
            if (confirmacion) {
                alert(`✓ ASIGNACIÓN CONFIRMADA\n\nEl docente ha sido asignado exitosamente al curso ${cursoActual}.\n\n• Fecha: ${new Date().toLocaleDateString()}\n• Hora: ${new Date().toLocaleTimeString()}\n• Estado: Procesado`);
                cerrarModal();
                // Aquí iría la lógica para actualizar la tabla
            }
        }
        
        function eliminarAsignacion(codigo) {
            const confirmacion = confirm(`¿Está seguro de eliminar la asignación del curso ${codigo}?\n\nEsta acción liberará al docente y el curso quedará disponible para nueva asignación.`);
            
            if (confirmacion) {
                alert(`✓ ASIGNACIÓN ELIMINADA\n\nEl docente ha sido removido del curso ${codigo}.\n\nEl curso está ahora disponible para nueva asignación.`);
                // Aquí iría la lógica para eliminar la asignación
            }
        }
        
        function abrirModalAsignacionMultiple() {
            alert('Funcionalidad de asignación múltiple - En desarrollo');
        }
        
        function generarReporte() {
            const periodo = document.getElementById('periodo_academico').value;
            alert(`Generando reporte de asignaciones para el período ${periodo}...\n\nEl reporte se descargará en formato PDF.`);
        }
        
        // Cerrar modal al hacer clic fuera de él
        document.getElementById('modalAsignacion').addEventListener('click', function(e) {
            if (e.target === this) {
                cerrarModal();
            }
        });
    </script>
</body>
</html>