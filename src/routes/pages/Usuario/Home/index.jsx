import { Text, View, Image, ScrollView, TouchableOpacity } from 'react-native';
import { Shadow } from 'react-native-shadow-2';

import styles from '../../../../Components/Styles/Home/homeStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function UsuarioHome({ navigation }) {

  return (
    <View style={styles.container}>
      <ScrollView>
        {/* Imagens dos cantos */}
        <View style={{ position: 'absolute', width: '100%', height: '20%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 80, width: 128 }}
                source={require('../../../../../assets/img/Home/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'sticky', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 150, width: 91 }}
                source={require('../../../../../assets/img/Home/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 165, width: 159 }}
                source={require('../../../../../assets/img/Home/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 90, width: 111 }}
                source={require('../../../../../assets/img/Home/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>

        {/* Imagem do Cola ai */}
        <View style={styles.fundo}>
          <Image
            style={{ height: 160, width: 320 }}
            source={require('../../../../../assets/img/Home/cola_ai_home.png')}
          />
        </View>

        {/* Elementos */}
        
        <View style={styles.background}>
          <Shadow distance={10} startColor={'#000'} sides={'top'} stretch={true} style={{borderTopLeftRadius:40, borderTopRightRadius:40,}}>
          <View style={styles.buttonsArea}>
            <View style={styles.buttons}>
              <View style={{ justifyContent: 'center', alignItems: 'center', height: '100%',}}>
                <TouchableOpacity 
                  style={{
                    backgroundColor: '#e6aeb2',
                    width: 100,
                    height: 100,
                    alignItems: 'center',
                    justifyContent: 'center',
                    borderRadius: 20,
                  }}
                  onPress={() => navigation.navigate('Teatros')}>
                  <Image style={{ width: 90, height: 80 }}
                  source={require('../../../../../assets/img/Home/teatro_img.png')} />
                </TouchableOpacity>
                <Text style={{ fontSize: 20, fontWeight: 'bold', color: '#fd5620', top: 5 }}>
                  TEATROS
                </Text>
              </View>
              <View style={{ justifyContent: 'center', alignItems: 'center', height: '100%' }}>
                <TouchableOpacity 
                  style={{
                    backgroundColor: '#a5f866',
                    width: 100,
                    height: 100,
                    alignItems: 'center',
                    justifyContent: 'center',
                    borderRadius: 20,
                  }}
                  onPress={() => navigation.navigate('Parques')}>
                  <Image
                  style={{ width: 90, height: 80 }}
                  source={require('../../../../../assets/img/Home/parque_img.png')}/>                  
                </TouchableOpacity>
                <Text style={{ fontSize: 20, fontWeight: 'bold', color: '#6d9eaf', top: 5 }}>
                  PARQUES
                </Text>
              </View>
              <View style={{ justifyContent: 'center', alignItems: 'center', height: '100%' }}>
                <TouchableOpacity 
                  style={{
                    backgroundColor: '#6d9eaf',
                    width: 100,
                    height: 100,
                    alignItems: 'center',
                    justifyContent: 'center',
                    borderRadius: 20,
                  }}
                  onPress={() => navigation.navigate('Museus')}>
                  <Image
                  style={{ width: 80, height: 70 }}
                  source={require('../../../../../assets/img/Home/museu_img.png')}/>
                </TouchableOpacity>
                <Text style={{ fontSize: 20, fontWeight: 'bold', color: '#e6aeb2', top: 5 }}>
                  MUSEUS
                </Text>
              </View>
              {/* Adicione os outros blocos de código semelhantes para os botões restantes */}
            </View>
          </View>

          <View style={styles.fabricasArea}>
            <Image
              style={styles.CentrosFoto}
              source={require('../../../../../assets/img/Home/fabricas.jpg')}
            />
            <View style={styles.CentrosTextos}>
              <Text style={{ fontSize: 20, fontWeight: 'bold', color: '#fd5620',textAlign: 'center', }}>
                FÁBRICAS DE CULTURA
              </Text>
              <Text
                style={{
                  fontSize: 14,
                  textAlign: 'justify',
                  color: '#000',
                  paddingLeft: 10,
                  paddingRight: 5,
                }}
              >
                As Fábricas de Cultura oferecem à população uma diversa e intensa programação
                cultural, com diversos cursos, jogos, bibliotecas entre outros.
              </Text>
            </View>
          </View>

          <View style={styles.CentrosArea}>
            <View style={styles.CentrosTextos}>
              <Text
                style={{
                  fontSize: 16,
                  fontWeight: 'bold',
                  color: '#fd5620',
                  textAlign: 'center',
                }}
              >
                CENTROS EDUCACIONAIS UNIFICADOS
              </Text>
              <Text
                style={{
                  fontSize: 14,
                  textAlign: 'justify',
                  color: '#000',
                  paddingLeft: 10,
                  paddingRight: 5,
                }}
              >
                São espaços que visam a promover o desenvolvimento integral de crianças, jovens e
                adultos, por meio de experiências educacionais e culturais.
              </Text>
            </View>
            <Image
              style={styles.CentrosFoto}
              source={require('../../../../../assets/img/Home/ceu.png')}
            />
          </View>
          </Shadow>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
