import { StatusBar } from 'expo-status-bar';
import { Text, View, Image, ScrollView } from 'react-native';
import styles from '../../../../Components/Styles/Home/homeStyle';
import NavBar from '../../../../Components/NavBar/navbar';


export default function Home() {
  return (
    <View style={styles.container}>
      <ScrollView>
        {/* Imagens dos cantos */}
        <View style={{ position: 'absolute', width: '100%', height: 300 }}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 80, width: 128 }}
                source={require('../../../../../assets/img/Home/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
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
            style={{ height: 160, width: 340 }}
            source={require('../../../../../assets/img/Home/cola_ai_home.png')}
          />
        </View>

        {/* Elementos */}
        <View style={styles.background}>
          <View style={styles.buttonsArea}>
            <View style={styles.buttons}>
              <View style={{ justifyContent: 'center', alignItems: 'center', height: 130 }}>
                <View
                  style={{
                    backgroundColor: '#e6aeb2',
                    width: 110,
                    height: 100,
                    alignItems: 'center',
                    justifyContent: 'center',
                    borderRadius: 20,
                  }}
                >
                  <Image
                    style={{ width: 100, height: 90 }}
                    source={require('../../../../../assets/img/Home/teatro_img.png')}
                  />
                </View>
                <Text style={{ fontSize: 30, fontWeight: 'bold', color: '#fd5620', top: 5 }}>
                  TEATROS
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
              <Text style={{ fontSize: 24, fontWeight: 'bold', color: '#fd5620', top: 5 }}>
                FÁBRICAS DE CULTURA
              </Text>
              <Text
                style={{
                  fontSize: 18,
                  textAlign: 'justify',
                  color: '#000',
                  top: 5,
                  paddingLeft: 5,
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
                  fontSize: 24,
                  fontWeight: 'bold',
                  color: '#fd5620',
                  top: 5,
                  textAlign: 'center',
                }}
              >
                CENTROS EDUCACIONAIS UNIFICADOS
              </Text>
              <Text
                style={{
                  fontSize: 18,
                  textAlign: 'justify',
                  color: '#000',
                  top: 5,
                  paddingRight: 5,
                  paddingLeft: 10,
                }}
              >
                São espaços que visam a promover o desenvolvimento integral de crianças, jovens e
                adultos, por meio de experiências educacionais e culturais.
              </Text>
            </View>
            <Image
              style={{ height: 125, width: 125, borderRadius: 90 }}
              source={require('../../../../../assets/img/Home/ceu.png')}
            />
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
