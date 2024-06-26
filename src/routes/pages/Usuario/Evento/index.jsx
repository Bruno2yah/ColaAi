import { Text, View, Image, ScrollView, Pressable } from 'react-native';

import styles from '../../../../Components/Styles/Evento/EventoStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function Eventos({ navigation }) {

  return (
    <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 96, width: 90, marginTop: 20 }}
                source={require('../../../../../assets/img/Evento/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 100, width: 150 }}
                source={require('../../../../../assets/img/Evento/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 120, width: 35, marginBottom: 40 }}
                source={require('../../../../../assets/img/Evento/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 130, width: 44, marginBottom: 80}}
                source={require('../../../../../assets/img/Evento/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
      <ScrollView>

        {/* Imagem do Título */}
        <View style={styles.fundo}>
          <Image
            style={{ height: 35, width: 185 }}
            source={require('../../../../../assets/img/Evento/eventoTxt.png')}
          />
        </View>

        <View style={styles.EventoArea}>
          <Pressable style={{
              width: '90%',
              alignSelf: 'center',
              alignItems: 'center',
              flexDirection:'row',
              paddingBottom: 5
          }}
          onPress={() => navigation.navigate('PerfilOrganizacao')}>
              <View style={{
              width: 35,
              height: 35,
              backgroundColor: '#6d9eaf',
              alignSelf: 'flex-start',
              alignItems: 'center',
              justifyContent: 'center',
              borderRadius: 90,
              }}>
                <Image
                  style={{ height: 20, width: 20, marginLeft: 1, marginBottom: 1 }}
                  source={require('../../../../../assets/img/Evento/perfil.png')}
                />
              </View>
              <Text style={{ fontSize: 20, color: '#6D9EAF',textAlign: 'justify', paddingLeft: 10}}>
                  Organização Eventos
              </Text>
          </Pressable>
          
          <Image
            style={styles.Foto}
            source={require('../../../../../assets/img/Teatros/teatro_1.png')}
          />
          <View style={styles.Descricao}>
            <View style={{
              alignSelf: 'center',
              alignItems: 'center',
              flexDirection:'row',
          }}>
              <Text style={{ fontSize: 28, fontWeight: 'bold', color: '#ffd932',textAlign: 'center', padding: 4}}>
                  SHOW
              </Text>
              <Text style={{ fontSize: 28, fontWeight: 'bold', color: '#6d9eaf',textAlign: 'center', padding: 4 }}>
                  DE
              </Text>
              <Text style={{ fontSize: 28, fontWeight: 'bold', color: '#e6aeb2',textAlign: 'center', padding: 4}}>
                  DESENHOS
              </Text>
            </View>
            
            <View style = {{flexDirection:'row',}}>
              <Text
                  style={{
                  fontSize: 16,
                  textAlign: 'center',
                  color: '#A6A6A6',
                  margin: 4,
                  textAlign: 'justify',
                  }}
              >
                Sucesso em todo o Brasil, o fenômeno infantil para crianças apresenta, “SHOW DE DESENHOS”.
                Com cerca de 01H30 duração, o espetáculo tem um repertório de histórias infantis, contemplando a cultura brasileira em forma de da animação, com o objetivo de incentivar as crianças e suas famílias a embarcarem em uma jornada lúdica repleta de músicas, desenhos e aprendizados. 
              </Text>
            </View>

            <View style = {styles.InfosArea}>
              <View style = {styles.InfosRows}>
                <View style = {styles.Infos}>
                  <Image
                  style={{ height: 26, width: 25 }}
                  source={require('../../../../../assets/img/Programação Cultural/classificacao.png')}
                  />
                  <Text style = {styles.InfosText}>
                  Faixa etária: +6
                  </Text>
                </View>
                <View style = {styles.Infos}>
                  <Image
                      style={{ height: 26, width: 26 }}
                      source={require('../../../../../assets/img/Programação Cultural/valor.png')}
                  />
                  <Text style = {styles.InfosText}>
                      Valor: Gratuito
                  </Text>
                </View>
              </View>
              <View style = {styles.InfosRows}>
                <View style = {styles.Infos}>
                  <Image
                  style={{ height: 27, width: 26 }}
                  source={require('../../../../../assets/img/Programação Cultural/point.png')}
                  />
                  <Text style = {styles.InfosText}>
                      Local: Teatro São Paulo/SP
                  </Text>
                </View>
                <View style = {styles.Infos}>
                  <Image
                      style={{ height: 26, width: 26 }}
                      source={require('../../../../../assets/img/Programação Cultural/relogio.png')}
                  />
                  <Text style = {styles.InfosText}>
                      Turno: Verspetino
                  </Text>
                </View>
              </View>
            </View>
            
            <View style = {styles.InfosRows}>
              <Text style = {{
                fontSize: 22,
                textAlign: 'center',
                color: '#A6A6A6',
                margin: 10,
                textAlign: 'center',
              }}>
                Informações detalhadas e contato:
              </Text>
            </View>
            
            <Pressable
              style={styles.button}
              onPress={() => navigation.navigate('HomeUsuario')}
            >
              <Text style={styles.buttonText}>Registre interesse</Text>
            </Pressable>
            <Pressable 
              style = {styles.InfosRows}
              onPress={() => navigation.navigate('HomeUsuario')}>
              <Text style = {{
                fontSize: 12,
                textAlign: 'center',
                color: '#6F9BAB',
                marginBottom: 10,
                textAlign: 'center',
                textDecorationLine: 'underline'
              }}>
                Clique para obter Informações detalhadas
              </Text>
            </Pressable>
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
