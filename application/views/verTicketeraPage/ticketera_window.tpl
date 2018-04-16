<div class="widget-content">
    <div class="row">
        <div class="col-md-4">
            <div class="big-legend-w shadow-right">
                <div class="legend-label">Turno</div>
                <div class="legend-value" id="plot-chart-value">{$turno}</div>
                <div class="legend-sub-label">Promedio de tiempo: {$promedio} segundos</div>
            </div>
        </div>
        <form action="{$root}/usuario/aumentar/{$id_ticketera}" method="post">
            <button type="submit" class="btn btn-action btn-lg btn-info"><i class="fa fa-upload"></i> Aumentar</button>
        </form>
        <br>
        <form method="post" action="{$root}/usuario/reiniciar/{$id_ticketera}">
            <button type="submit" class="btn btn-action btn-lg btn-warning"><i class="fa fa-undo"></i> Reiniciar
            </button>
        </form>

    </div>
</div>