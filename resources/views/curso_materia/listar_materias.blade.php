<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Materias - Sistema Académico</title>
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
            --info-color: #17a2b8;
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

        .btn-info {
            background: linear-gradient(135deg, var(--info-color), #5bc0de);
            color: white;
        }

        .btn-info:hover {
            background: linear-gradient(135deg, #5bc0de, #31b0d5);
            transform: translateY(-2px);
        }

        .btn-success {
            background: linear-gradient(135deg, var(--success-color), #20c997);
            color: white;
        }

        .btn-success:hover {
            background: linear-gradient(135deg, #20c997, #1eae8c);
            transform: translateY(-2px);
        }

        .btn-warning {
            background: linear-gradient(135deg, var(--warning-color), #ffd351);
            color: #212529;
        }

        .btn-warning:hover {
            background: linear-gradient(135deg, #ffd351, #ffc107);
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

        .status-draft {
            background: rgba(23, 162, 184, 0.15);
            color: var(--info-color);
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
            min-width: 1200px;
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

        .btn-view {
            background: linear-gradient(135deg, var(--info-color), #5bc0de);
            color: white;
        }

        .btn-view:hover {
            background: linear-gradient(135deg, #5bc0de, #31b0d5);
        }

        .btn-edit {
            background: linear-gradient(135deg, var(--accent-blue), #3399ff);
            color: white;
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #3399ff, #2980cc);
        }

        .btn-delete {
            background: linear-gradient(135deg, var(--danger-color), #e74c3c);
            color: white;
        }

        .btn-delete:hover {
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

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .materia-card {
            background: white;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .materia-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-color: var(--accent-blue);
        }

        .materia-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .materia-codigo {
            font-weight: 700;
            color: var(--primary-blue);
            font-size: 14px;
        }

        .materia-title {
            font-size: 13px;
            font-weight: 600;
            color: var(--secondary-blue);
            margin-bottom: 10px;
        }

        .materia-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 15px;
        }

        .detail-item {
            font-size: 10px;
        }

        .detail-label {
            color: #666;
            font-weight: 600;
        }

        .detail-value {
            color: var(--primary-blue);
        }

        .materia-actions {
            display: flex;
            gap: 8px;
            justify-content: flex-end;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
        }

        .page-btn {
            padding: 8px 15px;
            border: 1px solid var(--border-color);
            background: white;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 11px;
        }

        .page-btn:hover {
            background: var(--light-blue);
            border-color: var(--accent-blue);
        }

        .page-btn.active {
            background: var(--accent-blue);
            color: white;
            border-color: var(--accent-blue);
        }

        .view-toggle {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .toggle-btn {
            padding: 8px 16px;
            border: 1px solid var(--border-color);
            background: white;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 11px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .toggle-btn.active {
            background: var(--accent-blue);
            color: white;
            border-color: var(--accent-blue);
        }

        .toggle-btn:hover {
            background: var(--light-blue);
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
            
            .card-grid {
                grid-template-columns: 1fr;
            }
            
            .view-toggle {
                flex-direction: column;
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
            
            .materia-details {
                grid-template-columns: 1fr;
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
                    <i class="fas fa-book"></i>
                    <div class="title-text">
                        <h1>Listar Materias</h1>
                        <p>Sistema de Gestión Universitaria - Catálogo de Materias</p>
                    </div>
                </div>
                
                <div class="navigation">
                    <a href="{{ route('curso_materia.asignar_docente') }}" class="nav-button">
                        <i class="fas fa-chalkboard-teacher"></i> Asignar Docentes
                    </a>
                    <a href="{{ route('curso_materia.editar_informacion') }}" class="nav-button">
                        <i class="fas fa-edit"></i> Editar Información
                    </a>
                    <a href="{{ route('curso_materia.baja_materias') }}" class="nav-button">
                        <i class="fas fa-trash-alt"></i> Baja de Materias
                    </a>
                </div>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="content">
            <!-- Encabezado -->
            <div class="form-header">
                <h2><i class="fas fa-list"></i> Catálogo de Materias</h2>
                <p>Consulta y gestiona todas las materias disponibles en el sistema</p>
            </div>

            <!-- Alerta Informativa -->
            <div class="info-alert">
                <i class="fas fa-info-circle"></i>
                <p><strong>INFORMACIÓN IMPORTANTE:</strong> Este catálogo incluye todas las materias activas, inactivas y en desarrollo. Puede filtrar por facultad, estado o período académico. Para crear una nueva materia, utilice el formulario de edición de información.</p>
            </div>

            <!-- Estadísticas -->
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-content">
                        <h3>156</h3>
                        <p>Total de Materias</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>128</h3>
                        <p>Materias Activas</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-pause-circle"></i>
                    </div>
                    <div class="stat-content">
                        <h3>18</h3>
                        <p>Materias Inactivas</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-content">
                        <h3>10</h3>
                        <p>En Desarrollo</p>
                    </div>
                </div>
            </div>

            <!-- Filtros de Búsqueda -->
            <div class="form-grid">
                <div class="form-group">
                    <label for="periodo_academico">Período Académico</label>
                    <select id="periodo_academico" name="periodo_academico">
                        <option value="">Todos los períodos</option>
                        <option value="2023-2" selected>2023-2 (Actual)</option>
                        <option value="2023-1">2023-1</option>
                        <option value="2022-2">2022-2</option>
                        <option value="2022-1">2022-1</option>
                    </select>
                    <div class="form-help">Filtrar por período académico</div>
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
                    <div class="form-help">Filtrar por facultad específica</div>
                </div>
            </div>

            <!-- Búsqueda Avanzada y Tipo de Vista -->
            <div class="search-box">
                <div class="search-input">
                    <input type="text" id="buscar_materia" placeholder="Buscar por código, nombre, docente o descripción...">
                </div>
                <div class="filter-group">
                    <select id="estado_materia" style="width: 150px;">
                        <option value="">Todos los estados</option>
                        <option value="ACTIVA">Activa</option>
                        <option value="INACTIVA">Inactiva</option>
                        <option value="DESARROLLO">En desarrollo</option>
                        <option value="APROBADA">Aprobada</option>
                    </select>
                    <div class="view-toggle">
                        <button class="toggle-btn active" id="btnTabla" onclick="cambiarVista('tabla')">
                            <i class="fas fa-table"></i> Tabla
                        </button>
                        <button class="toggle-btn" id="btnTarjetas" onclick="cambiarVista('tarjetas')">
                            <i class="fas fa-th-large"></i> Tarjetas
                        </button>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="filtrarMaterias()">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="limpiarFiltros()">
                        <i class="fas fa-redo"></i> Limpiar
                    </button>
                </div>
            </div>

            <!-- Vista de Tabla -->
            <div id="vistaTabla">
                <h3 class="section-title"><i class="fas fa-table"></i> Listado de Materias</h3>
                
                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Materia</th>
                                <th>Facultad</th>
                                <th>Créditos</th>
                                <th>Horas</th>
                                <th>Nivel</th>
                                <th>Docente</th>
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
                                <td>1er Semestre</td>
                                <td>Dr. Carlos Rodríguez</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('MAT101')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('MAT101')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>FIS201</td>
                                <td>Física General</td>
                                <td>Ingeniería</td>
                                <td>5</td>
                                <td>8</td>
                                <td>2do Semestre</td>
                                <td>Dra. Ana Martínez</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('FIS201')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('FIS201')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>PSI301</td>
                                <td>Psicología del Desarrollo</td>
                                <td>Ciencias Sociales</td>
                                <td>3</td>
                                <td>4</td>
                                <td>3er Semestre</td>
                                <td>Dra. Marta Jiménez</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('PSI301')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('PSI301')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>ARQ202</td>
                                <td>Diseño Arquitectónico</td>
                                <td>Arquitectura y Diseño</td>
                                <td>4</td>
                                <td>6</td>
                                <td>2do Semestre</td>
                                <td>Arq. Luis Fernández</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('ARQ202')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('ARQ202')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>MED101</td>
                                <td>Anatomía Humana</td>
                                <td>Ciencias de la Salud</td>
                                <td>6</td>
                                <td>10</td>
                                <td>1er Semestre</td>
                                <td>Dr. Manuel Ortiz</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('MED101')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('MED101')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>QUI202</td>
                                <td>Química Orgánica</td>
                                <td>Ciencias de la Salud</td>
                                <td>4</td>
                                <td>6</td>
                                <td>2do Semestre</td>
                                <td>Dr. Pedro González</td>
                                <td><span class="status-badge status-active">Activa</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('QUI202')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('QUI202')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>HIS103</td>
                                <td>Historia Universal</td>
                                <td>Humanidades</td>
                                <td>3</td>
                                <td>4</td>
                                <td>1er Semestre</td>
                                <td>Lic. María López</td>
                                <td><span class="status-badge status-inactive">Inactiva</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('HIS103')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('HIS103')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>INF305</td>
                                <td>Inteligencia Artificial</td>
                                <td>Ingeniería</td>
                                <td>4</td>
                                <td>6</td>
                                <td>5to Semestre</td>
                                <td>Por asignar</td>
                                <td><span class="status-badge status-draft">En desarrollo</span></td>
                                <td>
                                    <button class="action-btn btn-view" onclick="verDetalleMateria('INF305')">
                                        <i class="fas fa-eye"></i> Ver
                                    </button>
                                    <button class="action-btn btn-edit" onclick="editarMateria('INF305')">
                                        <i class="fas fa-edit"></i> Editar
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Vista de Tarjetas -->
            <div id="vistaTarjetas" style="display: none;">
                <h3 class="section-title"><i class="fas fa-th-large"></i> Vista de Tarjetas</h3>
                
                <div class="card-grid">
                    <!-- Tarjeta 1 -->
                    <div class="materia-card">
                        <div class="materia-header">
                            <div class="materia-codigo">MAT101</div>
                            <span class="status-badge status-active">Activa</span>
                        </div>
                        <div class="materia-title">Cálculo I</div>
                        <div class="materia-details">
                            <div class="detail-item">
                                <div class="detail-label">Facultad:</div>
                                <div class="detail-value">Ingeniería</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Créditos:</div>
                                <div class="detail-value">4</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Horas:</div>
                                <div class="detail-value">6/semana</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Nivel:</div>
                                <div class="detail-value">1er Semestre</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Docente:</div>
                                <div class="detail-value">Dr. Carlos Rodríguez</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Prerrequisitos:</div>
                                <div class="detail-value">Ninguno</div>
                            </div>
                        </div>
                        <div class="materia-actions">
                            <button class="action-btn btn-view" onclick="verDetalleMateria('MAT101')">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                            <button class="action-btn btn-edit" onclick="editarMateria('MAT101')">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                        </div>
                    </div>

                    <!-- Tarjeta 2 -->
                    <div class="materia-card">
                        <div class="materia-header">
                            <div class="materia-codigo">FIS201</div>
                            <span class="status-badge status-active">Activa</span>
                        </div>
                        <div class="materia-title">Física General</div>
                        <div class="materia-details">
                            <div class="detail-item">
                                <div class="detail-label">Facultad:</div>
                                <div class="detail-value">Ingeniería</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Créditos:</div>
                                <div class="detail-value">5</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Horas:</div>
                                <div class="detail-value">8/semana</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Nivel:</div>
                                <div class="detail-value">2do Semestre</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Docente:</div>
                                <div class="detail-value">Dra. Ana Martínez</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Prerrequisitos:</div>
                                <div class="detail-value">MAT101</div>
                            </div>
                        </div>
                        <div class="materia-actions">
                            <button class="action-btn btn-view" onclick="verDetalleMateria('FIS201')">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                            <button class="action-btn btn-edit" onclick="editarMateria('FIS201')">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                        </div>
                    </div>

                    <!-- Tarjeta 3 -->
                    <div class="materia-card">
                        <div class="materia-header">
                            <div class="materia-codigo">INF305</div>
                            <span class="status-badge status-draft">En desarrollo</span>
                        </div>
                        <div class="materia-title">Inteligencia Artificial</div>
                        <div class="materia-details">
                            <div class="detail-item">
                                <div class="detail-label">Facultad:</div>
                                <div class="detail-value">Ingeniería</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Créditos:</div>
                                <div class="detail-value">4</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Horas:</div>
                                <div class="detail-value">6/semana</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Nivel:</div>
                                <div class="detail-value">5to Semestre</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Docente:</div>
                                <div class="detail-value">Por asignar</div>
                            </div>
                            <div class="detail-item">
                                <div class="detail-label">Prerrequisitos:</div>
                                <div class="detail-value">INF204, MAT202</div>
                            </div>
                        </div>
                        <div class="materia-actions">
                            <button class="action-btn btn-view" onclick="verDetalleMateria('INF305')">
                                <i class="fas fa-eye"></i> Ver
                            </button>
                            <button class="action-btn btn-edit" onclick="editarMateria('INF305')">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paginación -->
            <div class="pagination">
                <button class="page-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <span style="color: #666; font-size: 11px;">de 12 páginas</span>
                <button class="page-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <!-- Botones de Acción -->
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">
                    <i class="fas fa-arrow-left"></i> Volver
                </button>
                <button type="button" class="btn btn-info" onclick="exportarListado()">
                    <i class="fas fa-file-excel"></i> Exportar a Excel
                </button>
                <button type="button" class="btn btn-success" onclick="nuevaMateria()">
                    <i class="fas fa-plus-circle"></i> Nueva Materia
                </button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inicializar eventos
            document.getElementById('buscar_materia').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    filtrarMaterias();
                }
            });
        });

        function cambiarVista(tipo) {
            const btnTabla = document.getElementById('btnTabla');
            const btnTarjetas = document.getElementById('btnTarjetas');
            const vistaTabla = document.getElementById('vistaTabla');
            const vistaTarjetas = document.getElementById('vistaTarjetas');
            
            if (tipo === 'tabla') {
                btnTabla.classList.add('active');
                btnTarjetas.classList.remove('active');
                vistaTabla.style.display = 'block';
                vistaTarjetas.style.display = 'none';
            } else {
                btnTabla.classList.remove('active');
                btnTarjetas.classList.add('active');
                vistaTabla.style.display = 'none';
                vistaTarjetas.style.display = 'block';
            }
        }
        
        function filtrarMaterias() {
            const busqueda = document.getElementById('buscar_materia').value.toLowerCase();
            const facultad = document.getElementById('facultad').value;
            const estado = document.getElementById('estado_materia').value;
            
            // Aquí iría la lógica de filtrado real
            alert(`Filtrando materias por:\n• Búsqueda: ${busqueda || 'Todas'}\n• Facultad: ${facultad || 'Todas'}\n• Estado: ${estado || 'Todos'}`);
        }
        
        function limpiarFiltros() {
            document.getElementById('buscar_materia').value = '';
            document.getElementById('facultad').value = '';
            document.getElementById('estado_materia').value = '';
            document.getElementById('periodo_academico').value = '2023-2';
            alert('Filtros limpiados');
        }
        
        function verDetalleMateria(codigo) {
            alert(`Mostrando detalles de la materia ${codigo}\n\nSe abrirá una ventana con toda la información detallada de la materia.`);
            // Aquí iría la lógica para mostrar el detalle completo
        }
        
        function editarMateria(codigo) {
            alert(`Editando la materia ${codigo}\n\nRedirigiendo al formulario de edición...`);
            // Aquí iría la lógica para redirigir al formulario de edición
        }
        
        function exportarListado() {
            const periodo = document.getElementById('periodo_academico').value;
            alert(`Exportando listado de materias para el período ${periodo}...\n\nEl archivo Excel se descargará automáticamente.`);
        }
        
        function nuevaMateria() {
            alert('Creando nueva materia\n\nRedirigiendo al formulario de creación...');
            // Aquí iría la lógica para crear una nueva materia
        }
    </script>
</body>
</html>