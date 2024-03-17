import { Text, View, Image, ScrollView, Pressable } from 'react-native';

import styles from '../../../../Components/Styles/ProgramacaoCultural/progCulturalStyle';

import NavBar from '../../../../Components/NavBar/navbar';

export default function ProgramacaoCultural({ navigation }) {
  return (
    <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 134, width: 105, marginTop: 25 }}
                source={require('../../../../../assets/img/Programação Cultural/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 160, width: 165 }}
                source={require('../../../../../assets/img/Programação Cultural/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 174, width: 159 }}
                source={require('../../../../../assets/img/Teatros/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 135, width: 125 }}
                source={require('../../../../../assets/img/Teatros/inferiorDireito.png')}
              />
            </View>
          </View>
          {/* Imagem do Cola ai */}
          <View style={styles.fundo}>
            <Image
              style={{ height: 73, width: 300 }}
              source={require('../../../../../assets/img/Programação Cultural/programacaoCulturalTxt.png')}
            />
          </View>
        </View>
      <ScrollView>
        <View style={styles.cards}>
          <View style={styles.ProgArea}>
            <Image
              style={styles.Foto}
              source={require('../../../../../assets/img/Programação Cultural/showDeDesenhos.png')}
            />
            <View style={styles.Titulo}>
              <Text style={{ fontSize: 26, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                SHOW DE DESENHOS
              </Text>
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
              <Pressable
                style={styles.button}
                onPress={() => navigation.navigate('Evento')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </Pressable>
            </View>
          </View>
          <View style={styles.ProgArea}>
            <Image
              style={styles.Foto}
              source={require('../../../../../assets/img/Programação Cultural/showDeDesenhos.png')}
            />
            <View style={styles.Titulo}>
              <Text style={{ fontSize: 26, fontWeight: 'bold', color: '#A6A6A6',textAlign: 'center', }}>
                SHOW DE DESENHOS
              </Text>
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
              <Pressable
                style={styles.button}
                onPress={() => navigation.navigate('Evento')}
              >
                <Text style={styles.buttonText}>Saber mais</Text>
              </Pressable>
            </View>
          </View>
        </View>
      </ScrollView>
      <NavBar />
    </View>
  );
}
