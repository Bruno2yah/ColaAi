<h3>-- Coloquem as dependencias do projetos aqui --</h3>
-- Dependencias -- <br>
npm install @react-navigation/native <br>
npm install @react-navigation/stack <br>
npx expo install expo-image-picker <br>
npm install react-native-animatable <br>
npm install react-native-vector-icons <br>
npm i react-native-shadow-2 <br>
npm i react-native-dropdown-picker <br>
-- Dependencias -- <hr>

<h3>-- Para resolver o problema de gesture--handler no expo go --</h3><br>
importar isso no primeiro arquivo do projeto no arquivo App.tsx:<br>
import 'react-native-gesture-handler';<br>
-- Dependencias -- <br>
expo install react-native-gesture-handler<br>
 npm install react-native-gesture-handler<br>
npx expo install react-native-svg <br>
npm i react-native-shadow-2 <br>

-- Dependencias -- <hr>

<h3>-- Importante --</h3>
Não Criem do zero os arquivos do app, pois pode dar conflito na hora de dar merge(Mesclar), deem "git clone https://github.com/Bruno2yah/ColaAi.git" para baixarem o arquivo da Main, que é a branch principal. Façam isso dentro da pasta expo<br>
Sigam o Passo a passo:<br>
1. abrir o cmd<br>
2. cd/<br>
3. cd expo<br>
4. git clone https://github.com/Bruno2yah/ColaAi.git<br>

Ao baixar o app, a primeira coisa que devem fazer, é dar "npm install", que irá baixar os módulos da expo, depois disso, instalem manualmente as dependencias vistas acima.<hr>

<h3>-- Importante --</h3>
Não alterem diretamente a branch main, criem uma branch para o que vão modificar, a branch main tem que ficar apenas o concluido, não o que está em andamento. Quando terminarem, por exemplo, de fazer uma tela, aí faremos um merge para mesclar.<hr>

<h3>-- Importante --</h3>
o git cria dois repositorios, quando voces dão git clone, ele irá criar um repositório local, enquanto mantém um online. então se mais de uma pessoa estiver mexendo na mesma branch, sempre deem "git pull origin main", no lugar desse main, vcs alteram pelo nome da  branch, isso irá atualizar o seu repositório local com os dados que estão no repositório online. Basicamente, ele irá atualizar todas as modificações que foram feitas e que não está no seu repositório local.<hr>

<h3>-- Comandos --</h3>
<b>git clone [link do repositório]</b> &nbsp&nbsp Baixa os arquivos do repositório principal, a branch "main"<br>
<b>git clone -b [nome da branch] [link do repositório]</b> &nbsp&nbsp baixa os arquivos da branch espeficada<br>
<b>git branch [nome da branch]</b> &nbsp&nbsp Cria a branch<br>
<b>git checkout [nome da branch]</b> &nbsp&nbsp troca para a branch especificada<br>
<b>git status</b> &nbsp&nbsp Revela informações da branch atual, se existem dados do repositorio web que devem ser atualizados no repositorio local. Se existem dados no local que ainda não existe no web.<br>
<b>git add .</b> &nbsp&nbsp Ao criarmos, modificarmos ou excluirmos arquivos, eles só são alterados no repositório local, então devemos usar esse comando para adicionarmos ao próximo commit<br>
<b>git commit -m "Mensagem do commit"</b> &nbsp&nbsp Aqui é onde salvamos um "ponto de controle", e devemos especificar oo que foi alterado<br>
<b>git push -u origin [nome da branch]</b> &nbsp&nbsp Envia o commit para o repositório online, ele só envia o que foi alterado no ultimo commit<br>
<b>git pull origin [nome do repositório]</b> &nbsp&nbsp Atualiza o repotório local com o ultimo commit da branch<hr>

<h3>-- Como enviar arquivos para o git --</h3>
Siga o passo a passo:<br>
1. git status &nbsp&nbsp (Para verificar se teve alterações)<br>
2. git add . &nbsp&nbsp (Para adicionar as alterações)<br>
3. git commit -m "Mensagem" &nbsp&nbsp (Para criar o commit)<br>
4. git push -u origin [nome da branch] &nbsp&nbsp (Para enviar o commit)<br>
