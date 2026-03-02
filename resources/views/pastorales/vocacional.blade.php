<x-pastoral-layout
    title="Pastoral Vocacional"
    heroImage="https://lh3.googleusercontent.com/aida-public/AB6AXuD1_y1Zjci-f_LoSPXAOc8D3O6RgdZEcIxAda8p5dPn9hZ4P1fxzda_7m4GIpj5UitLi6zW_u3kH1lAGGFKJiMZpAswGHkzT_FcGHlIAt4I_BQhlUBpN22A75BVoVU4hGb9dma74KjS47SGIpXqcUR_Pib3wtmhcZbCFAxHZJdDLkCkYbpoWKh6EenrvBD7AE-qKTeQZInYxV0cm5FbtCtMM6Rt1uGPOEQ9sHn3khs5Hb4XuGSMK4DfGY5rPjjNkUqCN3pFwKmxIMI"
    quote="No me eligieron ustedes a mí, sino que yo los elegí a ustedes y los destiné para que vayan y den fruto."
    quoteSource="Jn 15, 16"
    :opciones="[
        ['icon' => 'church', 'title' => 'Vida Sacerdotal', 'desc' => 'Acompañamiento a jóvenes que sienten el llamado al sacerdocio ministerial y la vida consagrada.', 'color' => 'primary'],
        ['icon' => 'diversity_3', 'title' => 'Vida Religiosa', 'desc' => 'Orientación para quienes disciernen una vocación a la vida religiosa en comunidades consagradas.', 'color' => 'secondary'],
        ['icon' => 'favorite', 'title' => 'Vocación Matrimonial', 'desc' => 'Formación para quienes descubren su llamado a la santidad a través del matrimonio y la familia.', 'color' => 'primary'],
    ]"
>
    @slot('introText')
        <p>La Pastoral Vocacional acompaña a quienes se sienten llamados por Dios a una vocación particular de servicio. Ya sea al sacerdocio, la vida religiosa, el matrimonio o el laicado comprometido, cada cristiano tiene una vocación única que Dios le ha confiado.</p>
        <p class="mt-4">A través de jornadas de discernimiento, acompañamiento espiritual personalizado y encuentros vocacionales, ayudamos a los fieles a descubrir y responder generosamente al plan que Dios tiene para sus vidas.</p>
    @endslot
</x-pastoral-layout>
