<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            <?php echo e(__('Les Informations Du compte')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600">
            <?php echo e(__("Mettre a jours les informations du compte et l'adresse mail.")); ?>

        </p>
    </header>

    <form id="send-verification" method="post" action="<?php echo e(route('verification.send')); ?>">
        <?php echo csrf_field(); ?>
    </form>

    <form method="post" action="<?php echo e(route('profile.update')); ?>" class="mt-6 space-y-6">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>

        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'name','value' => __('Name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'name','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'name','name' => 'name','type' => 'text','class' => 'mt-1 block w-full','value' => old('name', $user->name),'required' => true,'autofocus' => true,'autocomplete' => 'name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'name','name' => 'name','type' => 'text','class' => 'mt-1 block w-full','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name', $user->name)),'required' => true,'autofocus' => true,'autocomplete' => 'name']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['class' => 'mt-2','messages' => $errors->get('name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'name_entreprise','value' => __('Nom de l\'entreprise')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'name_entreprise','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Nom de l\'entreprise'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'name_entreprise','name' => 'name_entreprise','type' => 'text','class' => 'mt-1 block w-full','value' => old('name_entreprise', $user->name_entreprise),'required' => true,'autocomplete' => 'name_entreprise']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'name_entreprise','name' => 'name_entreprise','type' => 'text','class' => 'mt-1 block w-full','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('name_entreprise', $user->name_entreprise)),'required' => true,'autocomplete' => 'name_entreprise']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['class' => 'mt-2','messages' => $errors->get('name_entreprise')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('name_entreprise'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'Adresse','value' => __('Adresse')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'Adresse','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Adresse'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'Adresse','name' => 'Adresse','type' => 'text','class' => 'mt-1 block w-full','value' => old('Adresse', $user->Adresse),'required' => true,'autocomplete' => 'Adresse']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'Adresse','name' => 'Adresse','type' => 'text','class' => 'mt-1 block w-full','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('Adresse', $user->Adresse)),'required' => true,'autocomplete' => 'Adresse']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['class' => 'mt-2','messages' => $errors->get('Adresse')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('Adresse'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'CP_Ville','value' => __('CP Ville')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'CP_Ville','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('CP Ville'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'CP_Ville','name' => 'CP_Ville','type' => 'text','class' => 'mt-1 block w-full','value' => old('CP_Ville', $user->CP_Ville),'required' => true,'autocomplete' => 'CP_Ville']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'CP_Ville','name' => 'CP_Ville','type' => 'text','class' => 'mt-1 block w-full','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('CP_Ville', $user->CP_Ville)),'required' => true,'autocomplete' => 'CP_Ville']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['class' => 'mt-2','messages' => $errors->get('CP_Ville')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('CP_Ville'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
        <div class="w-full md:w-1/4 px-3 mb-6 md:mb-0">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input2-label','data' => ['for' => 'Pays','value' => __('Pays')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input2-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'Pays','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Pays'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <div class="relative">
              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="Famille">
                <option value="CA">Canada</option>
                <option value="AF">Afghanistan</option>
                <option value="ZA">Afrique du sud</option>
                <option value="AX">Åland, îles</option>
                <option value="AL">Albanie</option>
                <option value="DZ">Algérie</option>
                <option value="DE">Allemagne</option>
                <option value="AD">Andorre</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antarctique</option>
                <option value="AG">Antigua et barbuda</option>
                <option value="SA">Arabie saoudite</option>
                <option value="AR">Argentine</option>
                <option value="AM">Arménie</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australie</option>
                <option value="AT">Autriche</option>
                <option value="AZ">Azerbaïdjan</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahreïn</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbade</option>
                <option value="BY">Bélarus</option>
                <option value="BE">Belgique</option>
                <option value="BZ">Belize</option>
                <option value="BJ">Bénin</option>
                <option value="BM">Bermudes</option>
                <option value="BT">Bhoutan</option>
                <option value="BO">Bolivie, l'état plurinational de</option>
                <option value="BQ">Bonaire, saint eustache et saba</option>
                <option value="BA">Bosnie herzégovine</option>
                <option value="BW">Botswana</option>
                <option value="BV">Bouvet, île</option>
                <option value="BR">Brésil</option>
                <option value="BN">Brunei darussalam</option>
                <option value="BG">Bulgarie</option>
                <option value="BF">Burkina faso</option>
                <option value="BI">Burundi</option>
                <option value="KY">Caïmans, îles</option>
                <option value="KH">Cambodge</option>
                <option value="CM">Cameroun</option>
                <option value="CV">Cap vert</option>
                <option value="CF">Centrafricaine, république</option>
                <option value="CL">Chili</option>
                <option value="CN">Chine</option>
                <option value="CX">Christmas, île</option>
                <option value="CY">Chypre</option>
                <option value="CC">Cocos (keeling), îles</option>
                <option value="CO">Colombie</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, la république démocratique du</option>
                <option value="CK">Cook, îles</option>
                <option value="KR">Corée, république de</option>
                <option value="KP">Corée, république populaire démocratique de</option>
                <option value="CR">Costa rica</option>
                <option value="CI">Côte d'ivoire</option>
                <option value="HR">Croatie</option>
                <option value="CU">Cuba</option>
                <option value="CW">Curaçao</option>
                <option value="DK">Danemark</option>
                <option value="DJ">Djibouti</option>
                <option value="DO">Dominicaine, république</option>
                <option value="DM">Dominique</option>
                <option value="EG">Égypte</option>
                <option value="SV">El salvador</option>
                <option value="AE">Émirats arabes unis</option>
                <option value="EC">Équateur</option>
                <option value="ER">Érythrée</option>
                <option value="ES">Espagne</option>
                <option value="EE">Estonie</option>
                <option value="US">États unis</option>
                <option value="ET">Éthiopie</option>
                <option value="FK">Falkland, îles (malvinas)</option>
                <option value="FO">Féroé, îles</option>
                <option value="FJ">Fidji</option>
                <option value="FI">Finlande</option>
                <option value="FR">France</option>
                <option value="GA">Gabon</option>
                <option value="GM">Gambie</option>
                <option value="GE">Géorgie</option>
                <option value="GS">Géorgie du sud et les îles sandwich du sud</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GR">Grèce</option>
                <option value="GD">Grenade</option>
                <option value="GL">Groenland</option>
                <option value="GP">Guadeloupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GG">Guernesey</option>
                <option value="GN">Guinée</option>
                <option value="GW">Guinée bissau</option>
                <option value="GQ">Guinée équatoriale</option>
                <option value="GY">Guyana</option>
                <option value="GF">Guyane française</option>
                <option value="HT">Haïti</option>
                <option value="HM">Heard et îles macdonald, île</option>
                <option value="HN">Honduras</option>
                <option value="HK">Hong kong</option>
                <option value="HU">Hongrie</option>
                <option value="IM">Île de man</option>
                <option value="UM">Îles mineures éloignées des états unis</option>
                <option value="VG">Îles vierges britanniques</option>
                <option value="VI">Îles vierges des états unis</option>
                <option value="IN">Inde</option>
                <option value="ID">Indonésie</option>
                <option value="IR">Iran, république islamique d'</option>
                <option value="IQ">Iraq</option>
                <option value="IE">Irlande</option>
                <option value="IS">Islande</option>
                <option value="IL">Israël</option>
                <option value="IT">Italie</option>
                <option value="JM">Jamaïque</option>
                <option value="JP">Japon</option>
                <option value="JE">Jersey</option>
                <option value="JO">Jordanie</option>
                <option value="KZ">Kazakhstan</option>
                <option value="KE">Kenya</option>
                <option value="KG">Kirghizistan</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Koweït</option>
                <option value="LA">Lao, république démocratique populaire</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Lettonie</option>
                <option value="LB">Liban</option>
                <option value="LR">Libéria</option>
                <option value="LY">Libye</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituanie</option>
                <option value="LU">Luxembourg</option>
                <option value="MO">Macao</option>
                <option value="MK">Macédoine, l'ex république yougoslave de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malaisie</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldives</option>
                <option value="ML">Mali</option>
                <option value="MT">Malte</option>
                <option value="MP">Mariannes du nord, îles</option>
                <option value="MA">Maroc</option>
                <option value="MH">Marshall, îles</option>
                <option value="MQ">Martinique</option>
                <option value="MU">Maurice</option>
                <option value="MR">Mauritanie</option>
                <option value="YT">Mayotte</option>
                <option value="MX">Mexique</option>
                <option value="FM">Micronésie, états fédérés de</option>
                <option value="MD">Moldova, république de</option>
                <option value="MC">Monaco</option>
                <option value="MN">Mongolie</option>
                <option value="ME">Monténégro</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="MM">Myanmar</option>
                <option value="NA">Namibie</option>
                <option value="NR">Nauru</option>
                <option value="NP">Népal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Niger</option>
                <option value="NG">Nigéria</option>
                <option value="NU">Niué</option>
                <option value="NF">Norfolk, île</option>
                <option value="NO">Norvège</option>
                <option value="NC">Nouvelle calédonie</option>
                <option value="NZ">Nouvelle zélande</option>
                <option value="IO">Océan indien, territoire britannique de l'</option>
                <option value="OM">Oman</option>
                <option value="UG">Ouganda</option>
                <option value="UZ">Ouzbékistan</option>
                <option value="PK">Pakistan</option>
                <option value="PW">Palaos</option>
                <option value="PS">Palestinien occupé, territoire</option>
                <option value="PA">Panama</option>
                <option value="PG">Papouasie nouvelle guinée</option>
                <option value="PY">Paraguay</option>
                <option value="NL">Pays bas</option>
                <option value="PE">Pérou</option>
                <option value="PH">Philippines</option>
                <option value="PN">Pitcairn</option>
                <option value="PL">Pologne</option>
                <option value="PF">Polynésie française</option>
                <option value="PR">Porto rico</option>
                <option value="PT">Portugal</option>
                <option value="QA">Qatar</option>
                <option value="RE">Réunion</option>
                <option value="RO">Roumanie</option>
                <option value="GB">Royaume uni</option>
                <option value="RU">Russie, fédération de</option>
                <option value="RW">Rwanda</option>
                <option value="EH">Sahara occidental</option>
                <option value="BL">Saint barthélemy</option>
                <option value="SH">Sainte hélène, ascension et tristan da cunha</option>
                <option value="LC">Sainte lucie</option>
                <option value="KN">Saint kitts et nevis</option>
                <option value="SM">Saint marin</option>
                <option value="MF">Saint martin(partie française)</option>
                <option value="SX">Saint martin (partie néerlandaise)</option>
                <option value="PM">Saint pierre et miquelon</option>
                <option value="VA">Saint siège (état de la cité du vatican)</option>
                <option value="VC">Saint vincent et les grenadines</option>
                <option value="SB">Salomon, îles</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa américaines</option>
                <option value="ST">Sao tomé et principe</option>
                <option value="SN">Sénégal</option>
                <option value="RS">Serbie</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra leone</option>
                <option value="SG">Singapour</option>
                <option value="SK">Slovaquie</option>
                <option value="SI">Slovénie</option>
                <option value="SO">Somalie</option>
                <option value="SD">Soudan</option>
                <option value="SS">Soudan du sud</option>
                <option value="LK">Sri lanka</option>
                <option value="SE">Suède</option>
                <option value="CH">Suisse</option>
                <option value="SR">Suriname</option>
                <option value="SJ">Svalbard et île jan mayen</option>
                <option value="SZ">Swaziland</option>
                <option value="SY">Syrienne, république arabe</option>
                <option value="TJ">Tadjikistan</option>
                <option value="TW">Taïwan, province de chine</option>
                <option value="TZ">Tanzanie, république unie de</option>
                <option value="TD">Tchad</option>
                <option value="CZ">Tchèque, république</option>
                <option value="TF">Terres australes françaises</option>
                <option value="TH">Thaïlande</option>
                <option value="TL">Timor leste</option>
                <option value="TG">Togo</option>
                <option value="TK">Tokelau</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinité et tobago</option>
                <option value="TN">Tunisie</option>
                <option value="TM">Turkménistan</option>
                <option value="TC">Turks et caïcos, îles</option>
                <option value="TR">Turquie</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ukraine</option>
                <option value="UY">Uruguay</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela, république bolivarienne du</option>
                <option value="VN">Viet nam</option>
                <option value="WF">Wallis et futuna</option>
                <option value="YE">Yémen</option>
                <option value="ZM">Zambie</option>
              </select>
            </div>
        </div>

        <div>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'email','value' => __('Email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Email'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'email','name' => 'email','type' => 'email','class' => 'mt-1 block w-full','value' => old('email', $user->email),'required' => true,'autocomplete' => 'username']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','name' => 'email','type' => 'email','class' => 'mt-1 block w-full','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email', $user->email)),'required' => true,'autocomplete' => 'username']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['class' => 'mt-2','messages' => $errors->get('email')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-2','messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php if($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail()): ?>
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        <?php echo e(__('Your email address is unverified.')); ?>


                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <?php echo e(__('Click here to re-send the verification email.')); ?>

                        </button>
                    </p>

                    <?php if(session('status') === 'verification-link-sent'): ?>
                        <p class="mt-2 font-medium text-sm text-green-600">
                            <?php echo e(__('A new verification link has been sent to your email address.')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="flex items-center gap-4">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?><?php echo e(__('Enregistrer')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php if(session('status') === 'profile-updated'): ?>
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                ><?php echo e(__('mis a jour !')); ?></p>
            <?php endif; ?>
        </div>
    </form>
</section>
<?php /**PATH C:\LaravelApp\Proj\proj\resources\views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>