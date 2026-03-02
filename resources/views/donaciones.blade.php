<x-layouts.app title="Donaciones y Ofrendas | Parroquia Cristo Resucitado" description="Tu generosidad construye el Reino de Dios. Apoya nuestra misión con tu ofrenda.">

    <div class="flex-grow w-full max-w-[1200px] mx-auto px-4 py-8 md:py-12">

        {{-- Hero Section --}}
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div class="flex flex-col gap-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold w-fit uppercase tracking-wider">
                    <span class="material-symbols-outlined text-sm">volunteer_activism</span>
                    Apoya nuestra misión
                </span>
                <h1 class="text-4xl md:text-5xl font-black leading-tight text-text-dark">
                    Tu generosidad construye el Reino de Dios
                </h1>
                <p class="text-lg text-gray-500 leading-relaxed">
                    Cada ofrenda es una semilla de esperanza. Tu apoyo nos permite mantener nuestra parroquia, ayudar a los más necesitados y continuar la evangelización en Honduras.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 mt-2">
                    <a class="inline-flex justify-center items-center gap-2 bg-primary hover:bg-primary/90 text-white font-bold py-3 px-8 rounded-lg shadow-md transition-all" href="#donar-online">
                        <span>Hacer Donación Online</span>
                        <span class="material-symbols-outlined">payments</span>
                    </a>
                    <a class="inline-flex justify-center items-center gap-2 bg-white border border-gray-200 hover:border-primary text-text-dark font-medium py-3 px-8 rounded-lg transition-all" href="#transferencia">
                        <span>Ver Cuentas Bancarias</span>
                        <span class="material-symbols-outlined">account_balance</span>
                    </a>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-primary to-orange-300 rounded-2xl blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative w-full aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                    <img alt="Interior de iglesia" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBauEQj5kWjQjEd5mGwsIhVE5oZSrGyN6hQwN76EV0utFsH_uOGcJLrKueh_gMcAX9g4sn5kOOCZ55enTFKo_UuqJ5hQXBferamPurGnlI_rWiUocv8xnE_h8xvYP7zQ3ntYsTC7GxaxOfp3t91pAWAuuAsCyDVy5sBXpKFheokyGCGOny828JU4u_k_EiIBLQb6Jkt6xrEjxs9rViH_QJoZb3aN5ZOQyjNIc0bIN0m3WpW1VxfvcrXHwaadTloP-B7F43OIN1obpM" loading="lazy" />
                </div>
            </div>
        </div>

        {{-- Impact Section --}}
        <section class="py-10 border-t border-gray-100">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold text-text-dark mb-3">Cómo ayuda tu ofrenda</h2>
                    <p class="text-gray-500">Transparencia en cada lempira. Tus donaciones se destinan directamente a estas áreas vitales.</p>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $impactCards = [
                    ['icon' => 'build', 'title' => 'Mantenimiento del Templo', 'desc' => 'Reparaciones, limpieza, electricidad y servicios básicos para mantener la casa de Dios digna y acogedora.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDOlhLyttzJxaZDSbptJZKeoJyNYirI_6HsbrWUsatwyn_rgpGw7faf4b8GCMhtV_BeEBsjUhnYu2gFevpyDhTswr_GoRH8X8_K1MdXqfR-ubfEpA0SjPvymNUvViehfwgzqKM8VRmaZ461M9kFSqf_YkadXP55tKzXfId5aFhud6y_WPZwVc0eGRFlN7bvG3Fv2rztCwJzuN9VKrO-UXNeWFTK5graHRw_xXLiembqVZt1G9KUt84KImTjmWL0F8tZSyiYpGsWigQ'],
                    ['icon' => 'volunteer_activism', 'title' => 'Obras de Caridad', 'desc' => 'Despensas solidarias y apoyo económico para familias vulnerables y ancianos de nuestra comunidad.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDTU3yt7u6R9T60dfA96pjA4DjOZ3jb_I_WpL2XY1Tl3--j4DgTx6BEgVWsGM1g8m80YR_EyFrLKGXzXrw76A6vsieSxxSFcnsEPekKhebEgcUQi098ApLO1SqjaX8HkHFDjS2QAY4pB34GZZTfbW_163DzUKy6EcKds7kzQyhEVdLW9ihMeknf_y_PJHPRMIK5DuODAFVlbWGcPlzI3aHHq7TLQvfFPznF_F3LQOQ67mSTdxnfTkziU7pJwFOZYPL3WdwB7UY6Lcs'],
                    ['icon' => 'school', 'title' => 'Formación Espiritual', 'desc' => 'Materiales para catequesis, retiros espirituales y apoyo a los grupos juveniles de la parroquia.', 'img' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDBrM9gEtTNQKwJP5B747zc7SH6xNvRhofWAs17_bFMyG2x1UV5kouHRzZYOMbAGHgI3TReqrz_0JGiCVss-RKdvKUp0HMaYew240DPINS7G2WjjL50_LRPI3voXoPDIfi2rS0To6bRPth1Ma8jPr7x6JTkNuU3PFOYMXYW9ovQjfJauq89cuG8C_qQ9-7D7br4fZoaV-B4PnJsMSKKzHWJyh8qnLm0ZSOeCyh5q2wiQthXKZVSPA5fTyAYuin9aOyX9YM38QjH4Qc'],
                ];
                @endphp

                @foreach($impactCards as $card)
                <div class="group bg-white rounded-xl p-5 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-full aspect-video rounded-lg overflow-hidden mb-4 bg-gray-100">
                        <img alt="{{ $card['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $card['img'] }}" loading="lazy" />
                    </div>
                    <h3 class="text-lg font-bold text-text-dark mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">{{ $card['icon'] }}</span> {{ $card['title'] }}
                    </h3>
                    <p class="text-sm text-gray-500 leading-relaxed">{{ $card['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Donation & Bank Details Grid --}}
        <div class="grid lg:grid-cols-12 gap-8 mt-12" id="donar-online">

            {{-- Donation Form (Left - Larger) --}}
            <div class="lg:col-span-7 flex flex-col gap-6">
                <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg border border-gray-100">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-primary/10 p-2 rounded-full text-primary">
                            <span class="material-symbols-outlined">credit_card</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark">Donación en Línea Segura</h3>
                    </div>

                    {{-- Toggle Frequency --}}
                    <div class="bg-background-light p-1.5 rounded-xl flex mb-8">
                        <label class="flex-1 cursor-pointer">
                            <input checked class="peer sr-only" name="frequency" type="radio" />
                            <div class="text-center py-2.5 rounded-lg text-sm font-medium text-gray-500 peer-checked:bg-white peer-checked:text-primary peer-checked:shadow-sm transition-all">
                                Donación Única
                            </div>
                        </label>
                        <label class="flex-1 cursor-pointer">
                            <input class="peer sr-only" name="frequency" type="radio" />
                            <div class="text-center py-2.5 rounded-lg text-sm font-medium text-gray-500 peer-checked:bg-white peer-checked:text-primary peer-checked:shadow-sm transition-all">
                                Donación Mensual
                            </div>
                        </label>
                    </div>

                    {{-- Amount Selection --}}
                    <p class="text-sm font-semibold text-text-dark mb-3">Selecciona el monto (Lempiras)</p>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-6">
                        <label class="cursor-pointer group relative">
                            <input class="peer sr-only" name="amount" type="radio" value="100" />
                            <div class="h-12 flex items-center justify-center rounded-lg border-2 border-gray-200 bg-transparent text-text-dark font-bold hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary transition-all">
                                L 100
                            </div>
                        </label>
                        <label class="cursor-pointer group relative">
                            <input checked class="peer sr-only" name="amount" type="radio" value="300" />
                            <div class="h-12 flex items-center justify-center rounded-lg border-2 border-gray-200 bg-transparent text-text-dark font-bold hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary transition-all">
                                L 300
                            </div>
                            <div class="absolute -top-2 -right-2 bg-primary text-white text-[10px] font-bold px-2 py-0.5 rounded-full opacity-0 peer-checked:opacity-100 transition-opacity">
                                Popular
                            </div>
                        </label>
                        <label class="cursor-pointer group relative">
                            <input class="peer sr-only" name="amount" type="radio" value="500" />
                            <div class="h-12 flex items-center justify-center rounded-lg border-2 border-gray-200 bg-transparent text-text-dark font-bold hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary transition-all">
                                L 500
                            </div>
                        </label>
                        <label class="cursor-pointer group relative">
                            <input class="peer sr-only" name="amount" type="radio" value="custom" />
                            <div class="h-12 flex items-center justify-center rounded-lg border-2 border-gray-200 bg-transparent text-text-dark font-medium hover:border-primary/50 peer-checked:border-primary peer-checked:bg-primary/5 peer-checked:text-primary transition-all">
                                Otro
                            </div>
                        </label>
                    </div>

                    {{-- Personal Info --}}
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="space-y-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase">Nombre Completo</label>
                            <input class="w-full px-4 py-2.5 rounded-lg bg-gray-50 border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="Juan Pérez" type="text" />
                        </div>
                        <div class="space-y-1">
                            <label class="text-xs font-semibold text-gray-500 uppercase">Correo Electrónico</label>
                            <input class="w-full px-4 py-2.5 rounded-lg bg-gray-50 border border-gray-200 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-colors" placeholder="juan@ejemplo.com" type="email" />
                        </div>
                    </div>

                    <button class="w-full py-4 rounded-xl bg-primary hover:bg-primary/90 text-white font-bold text-lg shadow-lg hover:shadow-xl transition-all flex items-center justify-center gap-2">
                        <span>Proceder al Pago</span>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>

                    <div class="flex items-center justify-center gap-4 mt-6 text-gray-400 grayscale opacity-70">
                        <span class="material-symbols-outlined text-2xl">lock</span>
                        <span class="text-xs font-medium">Pagos procesados de forma segura con encriptación SSL de 256-bits.</span>
                    </div>
                </div>
            </div>

            {{-- Bank Transfer Details (Right - Smaller) --}}
            <div class="lg:col-span-5 flex flex-col gap-6" id="transferencia">
                <div class="bg-background-light border border-gray-200 rounded-2xl p-6 md:p-8 h-full">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="bg-gray-200 p-2 rounded-full text-text-dark">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <h3 class="text-xl font-bold text-text-dark">Transferencia Bancaria</h3>
                    </div>
                    <p class="text-sm text-gray-500 mb-6">
                        Puedes realizar tu ofrenda mediante transferencia directa a nuestras cuentas oficiales en Honduras.
                    </p>
                    <div class="space-y-4">
                        {{-- Bank 1 --}}
                        <div class="bg-white p-4 rounded-xl border border-gray-100">
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-bold text-text-dark">Banco Atlántida</span>
                                <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-1 rounded uppercase">Ahorros</span>
                            </div>
                            <div class="flex items-center justify-between gap-2 bg-gray-50 p-2 rounded border border-dashed border-gray-300">
                                <code class="text-sm font-mono text-text-dark">2100123456789</code>
                                <button class="text-gray-400 hover:text-primary transition-colors" title="Copiar">
                                    <span class="material-symbols-outlined text-lg">content_copy</span>
                                </button>
                            </div>
                        </div>
                        {{-- Bank 2 --}}
                        <div class="bg-white p-4 rounded-xl border border-gray-100">
                            <div class="flex justify-between items-start mb-2">
                                <span class="font-bold text-text-dark">BAC Credomatic</span>
                                <span class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-1 rounded uppercase">Cheques</span>
                            </div>
                            <div class="flex items-center justify-between gap-2 bg-gray-50 p-2 rounded border border-dashed border-gray-300">
                                <code class="text-sm font-mono text-text-dark">720456123</code>
                                <button class="text-gray-400 hover:text-primary transition-colors" title="Copiar">
                                    <span class="material-symbols-outlined text-lg">content_copy</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-xs text-gray-500 mb-2">
                            <strong>Nota:</strong> Favor enviar comprobante de transferencia por WhatsApp para emitir su recibo de donación.
                        </p>
                        <a class="inline-flex items-center gap-1.5 text-sm font-bold text-green-600 hover:text-green-700" href="#">
                            <span class="material-symbols-outlined text-lg">chat</span>
                            Enviar Comprobante
                        </a>
                    </div>
                </div>
            </div>

        </div>

        {{-- Quote / Footer Message --}}
        <div class="mt-20 mb-10 text-center max-w-2xl mx-auto">
            <span class="material-symbols-outlined text-4xl text-primary/30 mb-4">format_quote</span>
            <p class="text-xl italic font-medium text-text-dark mb-4">
                "Cada uno dé como propuso en su corazón: no con tristeza, ni por necesidad, porque Dios ama al dador alegre."
            </p>
            <p class="text-sm font-bold text-primary uppercase tracking-widest">2 Corintios 9:7</p>
        </div>

    </div>

</x-layouts.app>
