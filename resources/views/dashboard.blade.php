@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Panel de Control</h1>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
@stop

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Usuarios Activos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Uso del Sistema</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Alertas Hoy</p>
                </div>
                <div class="icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>
                    <p>Reportes Pendientes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Más información <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Main row -->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actividad Reciente</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Usuario</th>
                                    <th>Acción</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Admin</td>
                                    <td>Inicio de sesión</td>
                                    <td>2024-01-15 10:30</td>
                                    <td><span class="badge bg-success">Exitoso</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Usuario1</td>
                                    <td>Creación de reporte</td>
                                    <td>2024-01-15 09:15</td>
                                    <td><span class="badge bg-info">Completado</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Admin</td>
                                    <td>Actualización de datos</td>
                                    <td>2024-01-14 16:45</td>
                                    <td><span class="badge bg-warning">Pendiente</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    <a href="#" class="btn btn-sm btn-info float-right">
                        Ver todas las actividades
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Información del Sistema</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-info elevation-1">
                            <i class="fas fa-server"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Estado del Servidor</span>
                            <span class="info-box-number">Online</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                                Uptime: 99.9%
                            </span>
                        </div>
                    </div>

                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1">
                            <i class="fas fa-database"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Base de Datos</span>
                            <span class="info-box-number">Conectada</span>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 85%"></div>
                            </div>
                            <span class="progress-description">
                                85% de uso
                            </span>
                        </div>
                    </div>

                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1">
                            <i class="fas fa-shield-alt"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Seguridad</span>
                            <span class="info-box-number">Protegido</span>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 95%"></div>
                            </div>
                            <span class="progress-description">
                                Última revisión: Hoy
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Acciones Rápidas</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-app">
                                <i class="fas fa-plus"></i> Nuevo Reporte
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-app">
                                <i class="fas fa-users"></i> Usuarios
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-app">
                                <i class="fas fa-bell"></i> Alertas
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-app">
                                <i class="fas fa-cog"></i> Configuración
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Actividad Mensual</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="monthlyActivityChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Distribución de Usuarios</h3>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="userDistributionChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
<style>
    .small-box {
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .small-box:hover {
        transform: translateY(-5px);
    }

    .info-box {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .btn-app {
        border-radius: 8px;
        margin: 5px;
        min-width: 80px;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }
</style>
@stop

@section('js')
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Monthly Activity Chart
        var monthlyCtx = document.getElementById('monthlyActivityChart').getContext('2d');
        var monthlyChart = new Chart(monthlyCtx, {
            type: 'line',
            data: {
                labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun'],
                datasets: [{
                    label: 'Actividad',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });

        // User Distribution Chart
        var userCtx = document.getElementById('userDistributionChart').getContext('2d');
        var userChart = new Chart(userCtx, {
            type: 'doughnut',
            data: {
                labels: ['Administradores', 'Usuarios', 'Visitantes', 'Inactivos'],
                datasets: [{
                    data: [12, 19, 3, 5],
                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#f59e0b',
                        '#ef4444'
                    ],
                    borderWidth: 2,
                    borderColor: '#ffffff'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    }
                },
                cutout: '70%'
            }
        });

        // Auto refresh dashboard every 30 seconds
        setInterval(function() {
            $.ajax({
                url: '#',
                method: 'GET',
                success: function(data) {
                    // Update small boxes
                    $('.small-box.bg-info .inner h3').text(data.active_users);
                    $('.small-box.bg-success .inner h3').text(data.system_usage + '%');
                    $('.small-box.bg-warning .inner h3').text(data.today_alerts);
                    $('.small-box.bg-danger .inner h3').text(data.pending_reports);

                    // Update info boxes
                    $('.info-box-icon.bg-success .info-box-number').text(data.db_usage + '%');
                    $('.progress-bar.bg-info').css('width', data.db_usage + '%');
                }
            });
        }, 30000);

        // Initialize tooltips
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
@stop